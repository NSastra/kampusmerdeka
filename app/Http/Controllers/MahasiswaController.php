<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Hash;
use Validator;
use App\Models\User;
use App\Models\Magang;
use App\Models\Kemanusiaan;
use App\Models\Kewirausahaan;
use App\Models\Studi;
use App\Models\Pertukaran;
use App\Models\Kkn;
use App\Models\Penelitian;
use App\Models\Mengajar;
use App\Models\Validasi;
use App\Models\Laporan;
use App\Models\Surat;
use App\Models\File;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mahasiswa.index');
    }

    public function showlogin(){
        If(Auth::check()){
            return redirect('/mahasiswa/index');
        }
        return view('/mahasiswa/login');
    }

    public function login(Request $request){
        $rules = [
            'email' => 'required|email',
            'password' => 'required|string'
        ];

        $messages = [
            'email.required' => 'Email Wajib Diisi',
            'email.email' => 'Email Tidak Valid',
            'password.required' => 'Password Wajib Diisi',
            'password.string' => 'Password Harus Berupa String'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];
        
        Auth::attempt($data);
        
        if (Auth::check()){
            return redirect('/mahasiswa/index');
        } else {
            Session::flash('error', 'Email atau Password salah');
            return redirect('/mahasiswa/login_n');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('home/index');
    }

    public function showregister(){
        return view('mahasiswa.register');
    }

    public function register(Request $request){
        $rules = [
            'name' => 'required|min:5|max:50',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed',
            'nim' => 'required|numeric|min:10|max:10',
            'kelas' => 'required',
            'semester' => 'required',
        ];

        $messages = [
            'name.required' => 'Nama Lengkap Wajib Diisi',
            'name.min' => 'Pengisian Nama Lengkap Minimal 5 Karakter',
            'name.max' => 'Pengisian Nama Lengkap Maksimal 50 Karakter',
            'email.required' => 'Email Wajib Diisi',
            'email.unique' => 'Email Sudah Terdaftar',
            'password.required' => 'Password Wajib Diisi',
            'password.confirmed' => 'Konfirmasi Password Tidak Sesuai',
            'nim.required' => 'NIM Wajib Diisi',
            'kelas.required' => 'Kelas Wajib Diisi',
            'semester.required' => 'Semester Wajib Diisi',
        ];

        $validator = Validator::make($request->all(),$rules, $messages);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }

        $user = new User;
        $user->name = ucwords(strtolower($request->name));
        $user->email = strtolower($request->email);
        $user->nim = strtolower($request->nim);
        $user->kelas = strtolower($request->kelas);
        $user->semester = strtolower($request->semester);
        $user->password = Hash::make($request->password);
        $user->email_verified_at = \Carbon\Carbon::now();
        $save = $user->save();

        if($save){
            Session::flash('success', 'Registrasi Akun Berhasil, Silakan Login Untuk Melanjutkan');
            return redirect('/mahasiswa/showlogin');
        } else {
            Session::flash('errors', ['' => 'Registrasi Gagal, Silakan Ulangi Proses Registrasi Anda']);
            return redirect('/mahasiswa/showregister');
        }
        
    }

    public function profile(){
        // $User = User::find('id');
        $Magang = Magang::where('users_id', Auth::id())->get();
        $Studi = Studi::where('users_id', Auth::id())->get();
        $Kemanusiaan = Kemanusiaan::where('users_id', Auth::id())->get();
        $Kkn = Kkn::where('users_id', Auth::id())->get();
        $Penelitian = Penelitian::where('users_id', Auth::id())->get();
        $Mengajar = Mengajar::where('users_id', Auth::id())->get();
        $Pertukaran = Pertukaran::where('users_id', Auth::id())->get();
        $Kewirausahaan = Kewirausahaan::where('users_id', Auth::id())->get();
        return view('mahasiswa.profile', compact('Magang', 'Studi', 'Kemanusiaan', 'Kkn', 'Penelitian', 'Mengajar', 'Pertukaran', 'Kewirausahaan'));
    }

    public function pengumuman(){
        $Validasi = Validasi::orderBy('created_at', 'desc')->get();
        return view('mahasiswa.pengumuman', compact('Validasi'));
    }

    public function showdaftarmagang(){
        // return view('mahasiswa.showdaftarmagang');

        if (Auth::check()){
            return redirect('/mahasiswa/showdaftarmagang');
        } else {
            Session::flash('error', 'Email atau Password salah');
            return redirect('/mahasiswa/showlogin');
        }
    }

    // public function prsmagang(){
    //     $Prsmagang = Prsmagang::orderBy('id')->get();
    //     return view('mahasiswa.prsmagang', compact('Prsmagang'));
    // }

    public function showdaftarkkn(){
        // return view('mahasiswa.showdaftarkkn');

        if (Auth::check()){
            return redirect('/mahasiswa/showdaftarkkn');
        } else {
            // Session::flash('error', 'Email atau Password salah');
            return redirect('/mahasiswa/showlogin');
        }
    }

    public function prskkn(){
        $Prskkn = Prskkn::orderBy('id')->get();
        return view('mahasiswa.prskkn', compact('Prskkn'));
    }

    public function showdaftarajar(){
        // return view('mahasiswa.showdaftarajar');

        if (Auth::check()){
            return redirect('/mahasiswa/showdaftarajar');
        } else {
            // Session::flash('error', 'Email atau Password salah');
            return redirect('/mahasiswa/showlogin');
        }
    }

    public function showdaftarplt(){
        return view('mahasiswa.showdaftarplt');
    }

    public function showdaftarstudi(){
        return view('mahasiswa.showdaftarstudi');
    }

    public function prsstudi(){
        $Prsstudi = Prsstudi::orderBy('id')->get();
        return view('mahasiswa.prsstudi', compact('Prsstudi'));
    }

    public function showdaftarkms(){
        return view('mahasiswa.showdaftarkms');
    }

    public function showdaftarptk(){
        return view('mahasiswa.showdaftarptk');
    }

    public function showdaftarkwu(){
        return view('mahasiswa.showdaftarkwu');
    }

    public function daftarmagang(Request $request){
        $request->validate([
            'nama_mhs' => 'required|min:5|max:50',
            'nim' => 'required|numeric|min:10|max:10|numeric',
            'semester' => 'required',
            'kelas' => 'required',
            'kegiatan' => 'required'
        ]);

        $magang = new Magang;
        $magang->nama_mhs = ucwords(strtolower($request->nama_mhs));
        $magang->nim = ucwords(strtolower($request->nim));
        $magang->semester = ucwords(strtolower($request->semester));
        $magang->kelas = ucwords(strtolower($request->kelas));
        $magang->kegiatan = ucwords(strtolower($request->kegiatan));
        $save = $magang->save();

        if($save){
            //Session::flash('success', 'Registrasi Akun Berhasil, Silakan Login Untuk Melanjutkan');
            return redirect('/mahasiswa/index');
        } else {
            //Session::flash('errors', ['' => 'Registrasi Gagal, Silakan Ulangi Proses Registrasi Anda']);
            return redirect('/mahasiswa/showdaftarmagang');
        }
    }

    public function daftarkms(Request $request){
        $request->validate([
            'nama_mhs' => 'required|min:5|max:50',
            'nim' => 'required|numeric|min:10|max:10|numeric',
            'semester' => 'required',
            'kelas' => 'required',
            'kegiatan' => 'required'
        ]);

        $kemanusiaan = new Kemanusiaan;
        $kemanusiaan->nama_mhs = ucwords(strtolower($request->nama_mhs));
        $kemanusiaan->nim = ucwords(strtolower($request->nim));
        $kemanusiaan->semester = ucwords(strtolower($request->semester));
        $kemanusiaan->kelas = ucwords(strtolower($request->kelas));
        $kemanusiaan->kegiatan = ucwords(strtolower($request->kegiatan));
        $save = $kemanusiaan->save();

        if($save){
            //Session::flash('success', 'Registrasi Akun Berhasil, Silakan Login Untuk Melanjutkan');
            return redirect('/mahasiswa/index');
        } else {
            //Session::flash('errors', ['' => 'Registrasi Gagal, Silakan Ulangi Proses Registrasi Anda']);
            return redirect('/mahasiswa/showdaftarkms');
        }
    }

    public function daftarkkn(Request $request){
        $request->validate([
            'nama_mhs' => 'required|min:5|max:50',
            'nim' => 'required|numeric|min:10|max:10|numeric',
            'semester' => 'required',
            'kelas' => 'required',
            'kegiatan' => 'required',
        ]);
        
        $kkn = new Kkn;
        $kkn->nama_mhs = ucwords(strtolower($request->nama_mhs));
        $kkn->nim = ucwords(strtolower($request->nim));
        $kkn->semester = ucwords(strtolower($request->semester));
        $kkn->kelas = ucwords(strtolower($request->kelas));
        $kkn->kegiatan = ucwords(strtolower($request->kegiatan));
        $save = $kkn->save();

        if($save){
            //Session::flash('success', 'Registrasi Akun Berhasil, Silakan Login Untuk Melanjutkan');
            return redirect('/mahasiswa/index');
        } else {
            //Session::flash('errors', ['' => 'Registrasi Gagal, Silakan Ulangi Proses Registrasi Anda']);
            return redirect('/mahasiswa/showdaftarkkn');
        }
    }

    public function daftarkwu(Request $request){
        $request->validate([
            'nama_mhs' => 'required|min:5|max:50',
            'nim' => 'required|numeric|min:10|max:10|numeric',
            'semester' => 'required',
            'kelas' => 'required',
            'kegiatan' => 'required',
        ]);

        $kewirausahaan = new Kewirausahaan;
        $kewirausahaan->nama_mhs = ucwords(strtolower($request->nama_mhs));
        $kewirausahaan->nim = ucwords(strtolower($request->nim));
        $kewirausahaan->semester = ucwords(strtolower($request->semester));
        $kewirausahaan->kelas = ucwords(strtolower($request->kelas));
        $kewirausahaan->kegiatan = ucwords(strtolower($request->kegiatan));
        $save = $kewirausahaan->save();

        if($save){
            //Session::flash('success', 'Registrasi Akun Berhasil, Silakan Login Untuk Melanjutkan');
            return redirect('/mahasiswa/index');
        } else {
            //Session::flash('errors', ['' => 'Registrasi Gagal, Silakan Ulangi Proses Registrasi Anda']);
            return redirect('/mahasiswa/showdaftarkwu');
        }
    }

    public function daftarptk(Request $request){
        $request->validate([
            'nama_mhs' => 'required|min:5|max:50',
            'nim' => 'required|numeric|min:10|max:10|numeric',
            'semester' => 'required',
            'kelas' => 'required',
            'kegiatan' => 'required',
        ]);

        $pertukaran = new Pertukaran;
        $pertukaran->nama_mhs = ucwords(strtolower($request->nama_mhs));
        $pertukaran->nim = ucwords(strtolower($request->nim));
        $pertukaran->semester = ucwords(strtolower($request->semester));
        $pertukaran->kelas = ucwords(strtolower($request->kelas));
        $pertukaran->kegiatan = ucwords(strtolower($request->kegiatan));
        $save = $pertukaran->save();

        if($save){
            //Session::flash('success', 'Registrasi Akun Berhasil, Silakan Login Untuk Melanjutkan');
            return redirect('/mahasiswa/index');
        } else {
            //Session::flash('errors', ['' => 'Registrasi Gagal, Silakan Ulangi Proses Registrasi Anda']);
            return redirect('/mahasiswa/showdaftarptk');
        }
    }

    public function daftarstudi(Request $request){
        $request->validate([
            'nama_mhs' => 'required|min:5|max:50',
            'nim' => 'required|numeric|min:10|max:10|numeric',
            'semester' => 'required',
            'kelas' => 'required',
            'kegiatan' => 'required',
        ]);

        $studi = new Studi;
        $studi->nama_mhs = ucwords(strtolower($request->nama_mhs));
        $studi->nim = ucwords(strtolower($request->nim));
        $studi->semester = ucwords(strtolower($request->semester));
        $studi->kelas = ucwords(strtolower($request->kelas));
        $studi->nama_lmbg = ucwords(strtolower($request->nama_lmbg));
        $studi->detail = ucwords(strtolower($request->detail));
        $save = $studi->save();

        if($save){
            //Session::flash('success', 'Registrasi Akun Berhasil, Silakan Login Untuk Melanjutkan');
            return redirect('/mahasiswa/index');
        } else {
            //Session::flash('errors', ['' => 'Registrasi Gagal, Silakan Ulangi Proses Registrasi Anda']);
            return redirect('/mahasiswa/showdaftarstudi');
        }
    }

    public function daftarplt(Request $request){
        $penelitian = new Penelitian;
        $penelitian->nama_mhs = ucwords(strtolower($request->nama_mhs));
        $penelitian->nim = ucwords(strtolower($request->nim));
        $penelitian->semester = ucwords(strtolower($request->semester));
        $penelitian->kelas = ucwords(strtolower($request->kelas));
        $penelitian->kegiatan = ucwords(strtolower($request->kegiatan));
        $save = $penelitian->save();

        if($save){
            //Session::flash('success', 'Registrasi Akun Berhasil, Silakan Login Untuk Melanjutkan');
            return redirect('/mahasiswa/index');
        } else {
            //Session::flash('errors', ['' => 'Registrasi Gagal, Silakan Ulangi Proses Registrasi Anda']);
            return redirect('/mahasiswa/showdaftarplt');
        }
    }

    public function daftarajar(Request $request){
        $request->validate([
            'nama_mhs' => 'required|min:5|max:50',
            'nim' => 'required|numeric|min:10|max:10|numeric',
            'semester' => 'required',
            'kelas' => 'required',
            'kegiatan' => 'required',
        ]);

        $mengajar = new Mengajar;
        $mengajar->nama_mhs = ucwords(strtolower($request->nama_mhs));
        $mengajar->nim = ucwords(strtolower($request->nim));
        $mengajar->semester = ucwords(strtolower($request->semester));
        $mengajar->kelas = ucwords(strtolower($request->kelas));
        $mengajar->kegiatan = ucwords(strtolower($request->kegiatan));
        // $user_id = auth()->id();
        $mengajar->users_id = \Auth::user()->id;
        $save = $mengajar->save();

        if($save){
            //Session::flash('success', 'Registrasi Akun Berhasil, Silakan Login Untuk Melanjutkan');
            return redirect('/mahasiswa/index');
        } else {
            //Session::flash('errors', ['' => 'Registrasi Gagal, Silakan Ulangi Proses Registrasi Anda']);
            return redirect('/mahasiswa/showdaftarajar');
        }
    }

    public function showcreatedok(){
        return view('mahasiswa.showcreatedok');
    }

    public function showcreatelprn(){
        return view('mahasiswa.showcreatelprn');
    }

    public function showcreatesurat(){
        return view('mahasiswa.showcreatesurat');
    }

    public function createfile(Request $request){
        $request->validate([
            'file' => 'required|mimes:pdf,docs|max:2048',
            'nama_mhs' => 'required',
            'nim' => 'required',
            'kelas' => 'required',
            'semester' => 'required',
        ]);

        $fileModel = new File;

        if($request->file()){
            $fileName = time().'-'.$request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');

            $fileModel->name = time().'-'.$request->file->getClientOriginalName();
            $fileModel->file_path = '/storage/' . $filePath;
            $fileModel->nama_mhs = $request->nama_mhs;
            $fileModel->nim = $request->nim;
            $fileModel->kelas = $request->kelas;
            $fileModel->semester = $request->semester;
            $fileModel->save();

            // return back()->with('success', 'file berhasil diupload')->with('file', $fileName);
            return redirect('/mahasiswa/profile');
        }
    }

    public function createlprn(Request $request){
        $request->validate([
            'file' => 'required|mimes:pdf,docs|max:2048',
        ]);

        $fileModel = new Laporan;

        if($request->file()){
            $fileName = time().'-'.$request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');

            $fileModel->name = time().'-'.$request->file->getClientOriginalName();
            $fileModel->file_path = '/storage/' . $filePath;
            $fileModel->nama_mhs = $request->nama_mhs;
            $fileModel->nim = $request->nim;
            $fileModel->kelas = $request->kelas;
            $fileModel->semester = $request->semester;
            $fileModel->save();

            // return back()->with('success', 'file berhasil diupload')->with('file', $fileName);
            return redirect('/mahasiswa/profile');
        }
    }

    public function createsurat(Request $request){
        $request->validate([
            'file' => 'required|mimes:pdf,docs|max:2048',
        ]);

        $fileModel = new Surat;

        if($request->file()){
            $fileName = time().'-'.$request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');

            $fileModel->name = time().'-'.$request->file->getClientOriginalName();
            $fileModel->file_path = '/storage/' . $filePath;
            $fileModel->nama_mhs = $request->nama_mhs;
            $fileModel->nim = $request->nim;
            $fileModel->kelas = $request->kelas;
            $fileModel->semester = $request->semester;
            $fileModel->save();

            // return back()->with('success', 'file berhasil diupload')->with('file', $fileName);
            return redirect('/mahasiswa/profile');
        }
    }


    public function downloadsurat(){
        $filePath = public_path('dokumen/Surat-Persetujuan.pdf');
        $headers = ['Content-Type: application/pdf'];
        $fileName = 'Surat Persetujuan Prodi' . '.pdf';

        return response()->download($filePath, $fileName, $headers);
    }

    public function downloadlaporan(){
        $filePath = public_path('dokumen/Laporan-Kegiatan.pdf');
        $headers = ['Content-Type: application/pdf'];
        $fileName = 'Laporan Kegiatan' . '.pdf';

        return response()->download($filePath, $fileName, $headers);
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
