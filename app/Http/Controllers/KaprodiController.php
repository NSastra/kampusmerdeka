<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
use Session;
use App\Models\User;
use App\Models\Kemanusiaan;
use App\Models\Kkn;
use App\Models\Magang;
use App\Models\Mengajar;
use App\Models\Penelitian;
use App\Models\Pertukaran;
use App\Models\Studi;
use App\Models\Kewirausahaan;
use App\Models\Validasi;
use PDF;

class KaprodiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kaprodi.index');
    }

    public function showlogin(){
        if (Auth::check()) {
            return redirect('kaprodi/index');
        }
        return view('kaprodi.login');
    }

    public function login(Request $request){
        $rules = [
            'email' => 'required|email',
            'password' => 'required|string'
        ];

        $messages = [
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Email tidak valid',
            'password.required' => 'Password wajib diisi',
            'password.string' => 'Password harus berupa string'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return redirect()->back->withErrors($validator)->withInput($request->all);
        }
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];
        
        Auth::attempt($data);
        
        if (Auth::check()){
            return redirect('/kaprodi/index');
        } else {
            Session::flash('error', 'Email atau Password salah');
            return redirect('/kaprodi/login');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('home/index');
    }

    public function kemanusiaan(){
        $Kemanusiaan = Kemanusiaan::orderBy('id')->get();
        return view('kaprodi.kemanusiaan', compact('Kemanusiaan'));
    }

    public function kemanusiaanvl_show($id){
        $Kemanusiaan = Kemanusiaan::where('id', $id)->first();
        return view('kaprodi.dfkemanusiaan', ['Kemanusiaan' => $Kemanusiaan]);
        // kaprodi.dfkemanusiaan = view form untuk pendaftaran
    }

    public function magang(){
        $Magang = Magang::orderBy('id')->get();
        return view('kaprodi.magang', compact('Magang'));
    }

    public function magangvl_show($id){
        $Magang = Magang::where('id', $id)->first();
        return view('kaprodi.dfmagang', ['Magang' => $Magang]);
    }

    public function kkn(){
        $Kkn = Kkn::orderBy('id')->get();
        return view('kaprodi.kkn', compact('Kkn'));
    }

    public function kknvl_show($id){
        $Kkn = Kkn::where('id', $id)->first();
        return view('kaprodi.dfkkn', ['Kkn' => $Kkn]);
    }

    public function wirausaha(){
        $Kewirausahaan = Kewirausahaan::orderBy('id')->get();
        return view('kaprodi.wirausaha', compact('Kewirausahaan'));
    }

    public function wirausahavl_show($id){
        $Kewirausahaan = Kewirausahaan::where('id', $id)->first();
        return view('kaprodi.dfwirausaha', ['Kewirausahaan' => $Kewirausahaan]);
    }

    public function penelitian(){
        $Penelitian = Penelitian::orderBy('id')->get();
        return view('kaprodi.penelitian', compact('Penelitian'));
    }

    public function penelitianvl_show($id){
        $Penelitian = Penelitian::where('id', $id)->first();
        return view('kaprodi.dfpenelitian', ['Penelitian' => $Penelitian]);
    }

    
    public function mengajar(){
        $Mengajar = Mengajar::orderBy('id')->get();
        return view('kaprodi.mengajar', compact('Mengajar'));
    }

    public function mengajarvl_show($id){
        $Mengajar = Mengajar::where('id', $id)->first();
        return view('kaprodi.dfmengajar', ['Mengajar' => $Mengajar]);
    }

    public function pertukaran(){
        $Pertukaran = Pertukaran::orderBy('id')->get();
        return view('kaprodi.pertukaran', compact('Pertukaran'));
    }

    public function pertukaranvl_show($id){
        $Pertukaran = Pertukaran::where('id', $id)->first();
        return view('kaprodi.dfpertukaran', ['Pertukaran' => $Pertukaran]);
    }

    public function studi(){
        $Studi = Studi::orderBy('id')->get();
        return view('kaprodi.studi', compact('Studi'));
    }

    public function studivl_show($id){
        $Studi = Studi::where('id', $id)->first();
        return view('kaprodi.dfstudi', ['Studi' => $Studi]);
    }

    public function printmagang2122(){
        $from = date('2021-08-01');
        $to = date('2022-09-01');
        $Magang = Magang::whereBetween('created_at', [$from, $to])->get();
        $pdf = PDF::loadview('admin.pdfmagang2122', ['Magang' => $Magang]);
        return $pdf->stream('laporan-magang-pdf');
    }

    public function printmagang2223(){
        $from = date('2022-08-01');
        $to = date('2023-09-01');
        $Magang = Magang::whereBetween('created_at', [$from, $to])->get();
        $pdf = PDF::loadview('admin.pdfmagang2223', ['Magang' => $Magang]);
        return $pdf->stream('laporan-magang-pdf');
    }

    public function printkwu2122(){
        $from = date('2021-08-01');
        $to = date('2022-09-01');
        $Kewirausahaan = Kewirausahaan::whereBetween('created_at', [$from, $to])->get();
        $pdf = PDF::loadview('admin.pdfkwu2122', ['Kewirausahaan' => $Kewirausahaan]);
        return $pdf->stream('laporan-kwu-pdf');
    }

    public function printkwu2223(){
        $from = date('2022-08-01');
        $to = date('2023-09-01');
        $Kewirausahaan = Kewirausahaan::whereBetween('created_at', [$from, $to])->get();
        $pdf = PDF::loadview('admin.pdfkwu2223', ['Kewirausahaan' => $Kewirausahaan]);
        return $pdf->stream('laporan-kwu-pdf');
    }

    public function printkms2122(){
        $from = date('2021-08-01');
        $to = date('2022-09-01');
        $Kemanusiaan = Kemanusiaan::whereBetween('created_at', [$from, $to])->get();
        $pdf = PDF::loadview('admin.pdfkms2122', ['Kemanusiaan' => $Kemanusiaan]);
        return $pdf->stream('laporan-kms-pdf');
    }

    public function printkms2223(){
        $from = date('2022-08-01');
        $to = date('2023-09-01');
        $Kemanusiaan = Kemanusiaan::whereBetween('created_at', [$from, $to])->get();
        $pdf = PDF::loadview('admin.pdfkms2223', ['Kemanusiaan' => $Kemanusiaan]);
        return $pdf->stream('laporan-kms-pdf');
    }

    public function printptk2122(){
        $from = date('2021-08-01');
        $to = date('2022-09-01');
        $Pertukaran = Pertukaran::whereBetween('created_at', [$from, $to])->get();
        $pdf = PDF::loadview('admin.pdfptk2122', ['Pertukaran' => $Pertukaran]);
        return $pdf->stream('laporan-ptk-pdf');
    }

    public function printptk2223(){
        $from = date('2022-08-01');
        $to = date('2023-09-01');
        $Pertukaran = Pertukaran::whereBetween('created_at', [$from, $to])->get();
        $pdf = PDF::loadview('admin.pdfptk2223', ['Pertukaran' => $Pertukaran]);
        return $pdf->stream('laporan-ptk-pdf');
    }

    public function printplt2122(){
        $from = date('2021-08-01');
        $to = date('2022-09-01');
        $Penelitian = Penelitian::whereBetween('created_at', [$from, $to])->get();
        $pdf = PDF::loadview('admin.pdfplt2122', ['Penelitian' => $Penelitian]);
        return $pdf->stream('laporan-plt-pdf');
    }

    public function printplt2223(){
        $from = date('2022-08-01');
        $to = date('2023-09-01');
        $Penelitian = Penelitian::whereBetween('created_at', [$from, $to])->get();
        $pdf = PDF::loadview('admin.pdfplt2223', ['Penelitian' => $Penelitian]);
        return $pdf->stream('laporan-plt-pdf');
    }

    public function printstudi2122(){
        $from = date('2021-08-01');
        $to = date('2022-09-01');
        $Studi = Studi::whereBetween('created_at', [$from, $to])->get();
        $pdf = PDF::loadview('admin.pdfstudi2122', ['Studi' => $Studi]);
        return $pdf->stream('laporan-studi-pdf');
    }

    public function printstudi2223(){
        $from = date('2022-08-01');
        $to = date('2023-09-01');
        $Studi = Studi::whereBetween('created_at', [$from, $to])->get();
        $pdf = PDF::loadview('admin.pdfstudi2223', ['Studi' => $Studi]);
        return $pdf->stream('laporan-studi-pdf');
    }

    public function printajar2122(){
        $from = date('2021-08-01');
        $to = date('2022-09-01');
        $Mengajar = Mengajar::whereBetween('created_at', [$from, $to])->get();
        $pdf = PDF::loadview('admin.pdfajar2122', ['Mengajar' => $Mengajar]);
        return $pdf->stream('laporan-ajar-pdf');
    }

    public function printajar2223(){
        $from = date('2022-08-01');
        $to = date('2023-09-01');
        $Mengajar = Mengajar::whereBetween('created_at', [$from, $to])->get();
        $pdf = PDF::loadview('admin.pdfajar2223', ['Mengajar' => $Mengajar]);
        return $pdf->stream('laporan-ajar-pdf');
    }

    public function printkkn2122(){
        $from = date('2021-08-01');
        $to = date('2022-09-01');
        $Kkn = Kkn::whereBetween('created_at', [$from, $to])->get();
        $pdf = PDF::loadview('admin.pdfkkn2122', ['Kkn' => $Kkn]);
        return $pdf->stream('laporan-kkn-pdf');
    }

    public function printkkn2223(){
        $from = date('2022-08-01');
        $to = date('2023-09-01');
        $Kkn = Kkn::whereBetween('created_at', [$from, $to])->get();
        $pdf = PDF::loadview('admin.pdfkkn2223', ['Kkn' => $Kkn]);
        return $pdf->stream('laporan-kkn-pdf');
    }

    public function cetakdata2122(){
        $from = date('2021-08-01');
        $to = date('2022-09-01');
        $Magang = Magang::whereBetween('created_at', [$from, $to])->get();
        $Kkn = Kkn::whereBetween('created_at', [$from, $to])->get();
        $Studi = Studi::whereBetween('created_at', [$from, $to])->get();
        $Penelitian = Penelitian::whereBetween('created_at', [$from, $to])->get();
        $Kewirausahaan = Kewirausahaan::whereBetween('created_at', [$from, $to])->get();
        $Pertukaran = Pertukaran::whereBetween('created_at', [$from, $to])->get();
        $Mengajar = Mengajar::whereBetween('created_at', [$from, $to])->get();
        $Kemanusiaan = Kemanusiaan::whereBetween('created_at', [$from, $to])->get();
        $cetak = PDF::loadview('kaprodi.cetakdata2122', ['Magang' => $Magang, 'Kkn' => $Kkn, 'Studi' => $Studi, 'Penelitian' => $Penelitian,
                'Kewirausahaan' => $Kewirausahaan, 'Pertukaran' => $Pertukaran, 'Mengajar' => $Mengajar, 'Kemanusiaan' => $Kemanusiaan]);
        return $cetak->stream('laporan-pendaftaran-pdf');
    }

    public function cetakdata2223(){
        $from = date('2022-08-01');
        $to = date('2023-09-01');
        $Magang = Magang::whereBetween('created_at', [$from, $to])->get();
        $Kkn = Kkn::whereBetween('created_at', [$from, $to])->get();
        $Studi = Studi::whereBetween('created_at', [$from, $to])->get();
        $Penelitian = Penelitian::whereBetween('created_at', [$from, $to])->get();
        $Kewirausahaan = Kewirausahaan::whereBetween('created_at', [$from, $to])->get();
        $Pertukaran = Pertukaran::whereBetween('created_at', [$from, $to])->get();
        $Mengajar = Mengajar::whereBetween('created_at', [$from, $to])->get();
        $Kemanusiaan = Kemanusiaan::whereBetween('created_at', [$from, $to])->get();
        $cetak = PDF::loadview('kaprodi.cetakdata2223', ['Magang' => $Magang, 'Kkn' => $Kkn, 'Studi' => $Studi, 'Penelitian' => $Penelitian,
                'Kewirausahaan' => $Kewirausahaan, 'Pertukaran' => $Pertukaran, 'Mengajar' => $Mengajar, 'Kemanusiaan' => $Kemanusiaan]);
        return $cetak->stream('laporan-pendaftaran-pdf');
    }

    public function vlkms(Request $request, $id){
        $request->validate([
            'nama_mhs' => 'required|min:5|max:50',
            'nim' => 'required|numeric',
            'semester' => 'required',
            'kelas' => 'required',
            'kegiatan' => 'required',
            'nama_mitra' => 'required',
            'status' => 'required',
        ]);

        Kemanusiaan::find($id)->update([
            'nama_mhs' => $request->nama_mhs,
            'nim' => $request->nim,
            'semester' => $request->semester,
            'kelas' => $request->kelas,
            'kegiatan' => $request->kegiatan,
            'status' => $request->status,
        ]);

        return redirect('/kaprodi/kemanusiaan');
    }

    public function vlstudi(Request $request, $id){
        $request->validate([
            'nama_mhs' => 'required|min:5|max:50',
            'nim' => 'required|numeric',
            'semester' => 'required',
            'kelas' => 'required',
            'kegiatan' => 'required',
            'nama_mitra' => 'required',
            'status' => 'required',
        ]);

        Studi::find($id)->update([
            'nama_mhs' => $request->nama_mhs,
            'nim' => $request->nim,
            'semester' => $request->semester,
            'kelas' => $request->kelas,
            'kegiatan' => $request->kegiatan,
            'status' => $request->status,
        ]);

        return redirect('/kaprodi/studi');
    }

    public function vlplt(Request $request, $id){
        $request->validate([
            'nama_mhs' => 'required|min:5|max:50',
            'nim' => 'required|numeric',
            'semester' => 'required',
            'kelas' => 'required',
            'kegiatan' => 'required',
            'nama_mitra' => 'required',
            'status' => 'required',
        ]);

        Penelitian::find($id)->update([
            'nama_mhs' => $request->nama_mhs,
            'nim' => $request->nim,
            'semester' => $request->semester,
            'kelas' => $request->kelas,
            'kegiatan' => $request->kegiatan,
            'status' => $request->status,
        ]);

        return redirect('/kaprodi/penelitian');
    }

    public function vlptk(Request $request, $id){
        $request->validate([
            'nama_mhs' => 'required|min:5|max:50',
            'nim' => 'required|numeric',
            'semester' => 'required',
            'kelas' => 'required',
            'kegiatan' => 'required',
            'nama_mitra' => 'required',
            'status' => 'required',
        ]);

        Pertukaran::find($id)->update([
            'nama_mhs' => $request->nama_mhs,
            'nim' => $request->nim,
            'semester' => $request->semester,
            'kelas' => $request->kelas,
            'kegiatan' => $request->kegiatan,
            'status' => $request->status,
        ]);

        return redirect('/kaprodi/pertukaran');
    }

    public function vlkwu(Request $request, $id){
        $request->validate([
            'nama_mhs' => 'required|min:5|max:50',
            'nim' => 'required|numeric',
            'semester' => 'required',
            'kelas' => 'required',
            'kegiatan' => 'required',
            'nama_mitra' => 'required',
            'status' => 'required',
        ]);

        Kewirausahaan::find($id)->update([
            'nama_mhs' => $request->nama_mhs,
            'nim' => $request->nim,
            'semester' => $request->semester,
            'kelas' => $request->kelas,
            'kegiatan' => $request->kegiatan,
            'status' => $request->status,
        ]);

        return redirect('/kaprodi/wirausaha');
    }

    public function vlmagang(Request $request, $id){
        $request->validate([
            'nama_mhs' => 'required|min:5|max:50',
            'nim' => 'required|numeric',
            'semester' => 'required',
            'kelas' => 'required',
            'kegiatan' => 'required',
            'nama_mitra' => 'required',
            'status' => 'required',
        ]);

        Magang::find($id)->update([
            'nama_mhs' => $request->nama_mhs,
            'nim' => $request->nim,
            'semester' => $request->semester,
            'kelas' => $request->kelas,
            'kegiatan' => $request->kegiatan,
            'status' => $request->status,
        ]);

        return redirect('/kaprodi/magang');
    }

    public function vlajar(Request $request, $id){
        $request->validate([
            'nama_mhs' => 'required|min:5|max:50',
            'nim' => 'required|numeric',
            'semester' => 'required',
            'kelas' => 'required',
            'kegiatan' => 'required',
            'nama_mitra' => 'required',
            'status' => 'required',
        ]);

        Mengajar::find($id)->update([
            'nama_mhs' => $request->nama_mhs,
            'nim' => $request->nim,
            'semester' => $request->semester,
            'kelas' => $request->kelas,
            'kegiatan' => $request->kegiatan,
            'status' => $request->status,
        ]);

        return redirect('/kaprodi/mengajar');
    }

    public function vlkkn(Request $request, $id){
        $request->validate([
            'nama_mhs' => 'required|min:5|max:50',
            'nim' => 'required|numeric',
            'semester' => 'required',
            'kelas' => 'required',
            'kegiatan' => 'required',
            'nama_mitra' => 'required',
            'status' => 'required',
        ]);

        Kkn::find($id)->update([
            'nama_mhs' => $request->nama_mhs,
            'nim' => $request->nim,
            'semester' => $request->semester,
            'kelas' => $request->kelas,
            'kegiatan' => $request->kegiatan,
            'status' => $request->status,
        ]);

        return redirect('/kaprodi/kkn');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
