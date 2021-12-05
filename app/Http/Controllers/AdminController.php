<?php

namespace App\Http\Controllers;

use App\Models\Kemanusiaan;
use App\Models\Kewirausahaan;
use App\Models\Magang;
use App\Models\KKN;
use App\Models\Mengajar;
use App\Models\Studi;
use App\Models\Penelitian;
use App\Models\Pertukaran;
use App\Models\Validasi;
use App\Models\Laporan;
use App\Models\Surat;
use App\Models\Dokumen;
use App\Models\File;
use App\Models\Mitrastudi;
use App\Models\Mitraptk;
use App\Models\Mitraplt;
use App\Models\Mitrakms;
use App\Models\Mitrakwu;
use App\Models\Mitramagang;
use App\Models\Mitraajar;
use App\Models\Mitrakkn;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
use Session;
//use Auth;
use App\Models\User;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }

    public function showlogin(){
        if (Auth::check()) {
            return redirect('admin/index');
        }
        return view('admin.login');
    }

    public function login(Request $request) {
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
            return redirect('/admin/index');
        } else {
            Session::flash('error', 'Email atau Password salah');
            return redirect('/admin/login');
        }

    }

    public function logout(){
        Auth::logout();
        return redirect('home/index');
    }

    public function showmagang(){
        $Magang = Magang::orderBy('created_at')->get();
        return view('admin.showmagang', compact('Magang'));
    }

    public function showkkn(){
        $KKN = KKN::orderBy('created_at')->get();
        return view('admin.showkkn', compact('KKN'));
    }

    public function showstudi(){
        $Studi = Studi::orderBy('created_at')->get();
        return view('admin.showstudi', compact('Studi'));
    }

    public function showmengajar(){
        $Mengajar = Mengajar::orderBy('created_at')->get();
        return view('admin.showmengajar', compact('Mengajar'));
    }

    public function showpenelitian(){
        $Penelitian = Penelitian::orderBy('created_at')->get();
        return view('admin.showpenelitian', compact('Penelitian'));
    }

    public function showwirausaha(){
        $Kewirausahaan = Kewirausahaan::orderBy('created_at')->get();
        return view('admin.showwirausaha', compact('Kewirausahaan'));
    }

    public function showkemanusiaan(){
        $Kemanusiaan = Kemanusiaan::orderBy('created_at')->get();
        return view('admin.showkemanusiaan', compact('Kemanusiaan'));
    }

    public function showpertukaran(){
        $Pertukaran = Pertukaran::orderBy('created_at')->get();
        return view('admin.showpertukaran', compact('Pertukaran'));
    }

    public function showregakun(){
        $User = User::orderBy('id', 'desc')->paginate(10);
        return view('admin.showuser', compact('User'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function createkms(Request $request)
    {
        $request->validate([
            'nama_mhs' => 'required|min:5|max:50',
            'nim' => 'required|numeric',
            'semester' => 'required',
            'kelas' => 'required',
            'kegiatan' => 'required',
            'nama_mitra' => 'required',
        ]);

        $Kemanusiaan = new Kemanusiaan;
        $Kemanusiaan->nama_mhs = ucwords(strtolower($request->nama_mhs));
        $Kemanusiaan->nim = ucwords(strtolower($request->nim));
        $Kemanusiaan->semester = ucwords(strtolower($request->semester));
        $Kemanusiaan->kelas = ucwords(strtolower($request->kelas));
        $Kemanusiaan->kegiatan = ucwords(strtolower($request->kegiatan));
        $Kemanusiaan->nama_mitra = ucwords(strtolower($request->nama_mitra));
        $Kemanusiaan->status = 'Dalam Proses Validasi';
        $save = $Kemanusiaan->save();

        if($save){
            //Session::flash('success', 'Registrasi Akun Berhasil, Silakan Login Untuk Melanjutkan');
            return redirect('/admin/kemanusiaan');
        } else {
            //Session::flash('errors', ['' => 'Registrasi Gagal, Silakan Ulangi Proses Registrasi Anda']);
            return redirect('/admin/kemanusiaan');
        }
    }

    public function showeditkms($id){
        $Kemanusiaan = Kemanusiaan::where('id', $id)->first();
        return view('admin.editkms', ['Kemanusiaan' => $Kemanusiaan]);
    }

    public function editkms(Request $request, $id){
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

        return redirect('/admin/kemanusiaan');
    }

    public function hapuskms($id){
        Kemanusiaan::find($id)->delete();
        return redirect('/admin/kemanusiaan');
    }

    public function createkkn(Request $request)
    {
        $request->validate([
            'nama_mhs' => 'required|min:5|max:50',
            'nim' => 'required|numeric',
            'semester' => 'required',
            'kelas' => 'required',
            'kegiatan' => 'required',
            'nama_mitra' => 'required',
        ]);

        $messages = [
            'nama.required' => 'Nama wajib diisi',
            'nama.min' => 'Nama harus diisi dengan minimal 5 karakter',
            'nama.max' => 'Nama harus diisi dengan maksimal 50 karakter',
            'nim.required' => 'NIM wajib diisi',
            'semester.required' => 'Semester wajib diisi',
            'kelas.required' => 'Kelas wajib diisi',
            'kegiatan.required' => 'Kegiatan wajib diisi',
        ];

        $KKN = new KKN;
        $KKN->nama_mhs = ucwords(strtolower($request->nama_mhs));
        $KKN->nim = ucwords(strtolower($request->nim));
        $KKN->semester = ucwords(strtolower($request->semester));
        $KKN->kelas = ucwords(strtolower($request->kelas));
        $KKN->kegiatan = ucwords(strtolower($request->kegiatan));
        $KKN->nama_mitra = ucwords(strtolower($request->nama_mitra));
        $KKN->status = 'Dalam Proses Validasi';
        $save = $KKN->save();

        if($save){
            //Session::flash('success', 'Registrasi Akun Berhasil, Silakan Login Untuk Melanjutkan');
            return redirect('/admin/kkn');
        } else {
            //Session::flash('errors', ['' => 'Registrasi Gagal, Silakan Ulangi Proses Registrasi Anda']);
            return redirect('/admin/kkn');
        }
    }

    public function showeditkkn($id){
        $KKN = KKN::where('id', $id)->first();
        return view('admin.editkkn', ['KKN' => $KKN]);
    }

    public function hapuskkn($id){
        KKN::find($id)->delete();
        return redirect('/admin/kkn');
    }

    public function editkkn(Request $request, $id){
        $request->validate([
            'nama_mhs' => 'required|min:5|max:50',
            'nim' => 'required|numeric',
            'semester' => 'required',
            'kelas' => 'required',
            'kegiatan' => 'required',
            'status' => 'required',
        ]);

        KKN::find($id)->update([
            'nama_mhs' => $request->nama_mhs,
            'nim' => $request->nim,
            'semester' => $request->semester,
            'kelas' => $request->kelas,
            'kegiatan' => $request->kegiatan,
            'status' => $request->status,
        ]);

        return redirect('/admin/kkn');
    }

    public function createmagang(Request $request){
        $request->validate([
            'nama_mhs' => 'required|min:5|max:50',
            'nim' => 'required|numeric',
            'semester' => 'required',
            'kelas' => 'required',
            'kegiatan' => 'required',
            'nama_mitra' => 'required',
        ]);

        $Magang = new Magang;
        $Magang->nama_mhs = ucwords(strtolower($request->nama_mhs));
        $Magang->nim = ucwords(strtolower($request->nim));
        $Magang->semester = ucwords(strtolower($request->semester));
        $Magang->kelas = ucwords(strtolower($request->kelas));
        $Magang->kegiatan = ucwords(strtolower($request->kegiatan));
        $Magang->nama_mitra = ucwords(strtolower($request->nama_mitra));
        $Magang->status = 'Dalam Proses Validasi';
        $save = $Magang->save();

        if($save){
            //Session::flash('success', 'Registrasi Akun Berhasil, Silakan Login Untuk Melanjutkan');
            return redirect('/admin/magang');
        } else {
            //Session::flash('errors', ['' => 'Registrasi Gagal, Silakan Ulangi Proses Registrasi Anda']);
            return redirect('/admin/magang');
        }
    }

    public function hapusmagang($id){
        Magang::find($id)->delete();
        return redirect('/admin/magang');
    }

    public function showeditmagang($id){
        $Magang = Magang::where('id', $id)->first();
        return view('admin.editmagang', ['Magang' => $Magang]);
    }

    public function editmagang(Request $request, $id){
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
            'nama_mitra' => $request->nama_mitra,
            'status' => $request->status,
        ]);

        return redirect('/admin/magang');
    }

    public function createajar(Request $request){
        $request->validate([
            'nama_mhs' => 'required|min:5|max:50',
            'nim' => 'required|numeric',
            'semester' => 'required',
            'kelas' => 'required',
            'kegiatan' => 'required',
            'nama_mitra' => 'required',
        ]);

        $Mengajar = new Mengajar;
        $Mengajar->nama_mhs = ucwords(strtolower($request->nama_mhs));
        $Mengajar->nim = ucwords(strtolower($request->nim));
        $Mengajar->semester = ucwords(strtolower($request->semester));
        $Mengajar->kelas = ucwords(strtolower($request->kelas));
        $Mengajar->kegiatan = ucwords(strtolower($request->kegiatan));
        $Mengajar->nama_mitra = ucwords(strtolower($request->nama_mitra));
        $Mengajar->status = 'Dalam Proses Validasi';
        $save = $Mengajar->save();

        if($save){
            //Session::flash('success', 'Registrasi Akun Berhasil, Silakan Login Untuk Melanjutkan');
            return redirect('/admin/mengajar');
        } else {
            //Session::flash('errors', ['' => 'Registrasi Gagal, Silakan Ulangi Proses Registrasi Anda']);
            return redirect('/admin/mengajar');
        }
    }

    public function showeditajar($id){
        $Mengajar = Mengajar::where('id', $id)->first();
        return view('admin.editmengajar', ['Mengajar' => $Mengajar]);
    }

    public function editajar(Request $request, $id){
        $request->validate([
            'nama_mhs' => 'required|min:5|max:50',
            'nim' => 'required|numeric',
            'semester' => 'required',
            'kelas' => 'required',
            'kegiatan' => 'required',
            'nama_mitra' => 'required',
        ]);

        Mengajar::find($id)->update([
            'nama_mhs' => $request->nama_mhs,
            'nim' => $request->nim,
            'semester' => $request->semester,
            'kelas' => $request->kelas,
            'kegiatan' => $request->kegiatan,
            'nama_mitra' => $request->nama_mitra,
            'status' => $request->status,
        ]);

        return redirect('/admin/mengajar');
    }

    public function hapusajar($id){
        Mengajar::find($id)->delete();
        return redirect('/admin/mengajar');
    }

    public function createplt(Request $request){
        $request->validate([
            'nama_mhs' => 'required|min:5|max:50',
            'nim' => 'required|numeric',
            'semester' => 'required',
            'kelas' => 'required',
            'kegiatan' => 'required',
            'nama_mitra' => 'required',
        ]);
        
        $Penelitian = new Penelitian;
        $Penelitian->nama_mhs = ucwords(strtolower($request->nama_mhs));
        $Penelitian->nim = ucwords(strtolower($request->nim));
        $Penelitian->semester = ucwords(strtolower($request->semester));
        $Penelitian->kelas = ucwords(strtolower($request->kelas));
        $Penelitian->kegiatan = ucwords(strtolower($request->kegiatan));
        $Penelitian->nama_mitra = ucwords(strtolower($request->nama_mitra));
        $Penelitian->status = 'Dalam Proses Validasi';
        $save = $Penelitian->save();

        if($save){
            return redirect('/admin/penelitian');
        } else {
            return redirect('/admin/penelitian');
        }
    }

    public function showeditplt($id){
        $Penelitian = Penelitian::where('id', $id)->first();
        return view('admin.editplt', ['Penelitian' => $Penelitian]);
    }

    public function editplt(Request $request, $id){
        $request->validate([
            'nama_mhs' => 'required|min:5|max:50',
            'nim' => 'required|numeric',
            'kelas' => 'required',
            'semester' => 'required',
            'kegiatan' => 'required',
            'nama_mitra' => 'required',
            'status' => 'required',
        ]);

        Penelitian::find($id)->update([
            'nama_mhs' => $request->nama_mhs,
            'nim' => $request->nim,
            'kelas' => $request->kelas,
            'semester' => $request->semester,
            'kegiatan' => $request->kegiatan,
            'nama_mitra' => $request->nama_mitra,
            'status' => $request->status,
        ]);

        return redirect('/admin/penelitian');
    }

    public function hapusplt($id){
        Penelitian::find($id)->delete();
        return redirect('/admin/penelitian');

    }

    public function createptk(Request $request){
        $request->validate([
            'nama_mhs' => 'required|min:5|max:50',
            'nim' => 'required|numeric',
            'semester' => 'required',
            'kelas' => 'required',
            'kegiatan' => 'required',
            'nama_mitra' => 'required',
        ]);
        
        $Pertukaran = new Pertukaran;
        $Pertukaran->nama_mhs = ucwords(strtolower($request->nama_mhs));
        $Pertukaran->nim =  ucwords(strtolower($request->nim));
        $Pertukaran->kelas = ucwords(strtolower($request->kelas));
        $Pertukaran->semester = ucwords(strtolower($request->semester));
        $Pertukaran->kegiatan = ucwords(strtolower($request->kegiatan));
        $Pertukaran->nama_mitra = ucwords(strtolower($request->nama_mitra));
        $Pertukaran->status = 'Dalam Proses Validasi';
        $save = $Pertukaran->save();

        if($save){
            return redirect('/admin/pertukaran');
        } else {
            return redirect('/admin/pertukaran');
        }
    }

    public function showeditptk($id){
        $Pertukaran = Pertukaran::find($id);
        return view('admin.editptk', ['Pertukaran' => $Pertukaran]);
    }

    public function editptk(Request $request, $id){
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
            'kelas' => $request->kelas,
            'semester' => $request->semester,
            'kegiatan' => $request->kegiatan,
            'nama_mitra' => $request->nama_mitra,
            'status' => $request->status,
        ]);

        return redirect('/admin/pertukaran');
    }

    public function hapusptk($id){
        Pertukaran::find($id)->delete();
        return redirect('/admin/pertukaran');
    }

    public function createstudi(Request $request){
        $request->validate([
            'nama_mhs' => 'required|min:5|max:50',
            'nim' => 'required|numeric',
            'semester' => 'required',
            'kelas' => 'required',
            'kegiatan' => 'required',
            'nama_mitra' => 'required',
        ]);

        $Studi = new Studi;
        $Studi->nama_mhs = $request->nama_mhs;
        $Studi->nim = $request->nim;
        $Studi->kelas = $request->kelas;
        $Studi->semester = $request->semester;
        $Studi->kegiatan = $request->kegiatan;
        $Studi->nama_mitra = $request->nama_mitra;
        $Studi->status = 'Dalam Proses Validasi';
        $save = $Studi->save();

        if($save){
            return redirect('/admin/studi');
        } else {
            return redirect('/admin/studi');
        }
    }
    
    public function showeditstudi($id){
        $Studi = Studi::find($id);
        return view('admin/editstudi', ['Studi' => $Studi]);
    }

    public function editstudi(Request $request, $id){
        $request->validate([
            'nama_mhs' => 'required|min:5|max:50',
            'nim' => 'required|numeric',
            'kelas' => 'required',
            'semester' => 'required',
            'kegiatan' => 'required',
            'nama_mitra' => 'required',
            'status' => 'required',
        ]);

        Studi::find($id)->update([
            'nama_mhs' => $request->nama_mhs,
            'nim' => $request->nim,
            'kelas' => $request->kelas,
            'semester' => $request->semester,
            'kegiatan' => $request->kegiatan,
            'nama_mitra' => $request->nama_mitra,
            'status' => $request->status,
        ]);

        return redirect('/admin/studi');

    }

    public function hapusstudi($id){
        Studi::find($id)->delete();
        return redirect('/admin/studi');
    }

    public function createkwu(Request $request){
        $request->validate([
            'nama_mhs' => 'required|min:5|max:50',
            'nim' => 'required|numeric',
            'semester' => 'required',
            'kelas' => 'required',
            'kegiatan' => 'required',
            'nama_mitra' => 'required',
        ]);

        $Kewirausahaan = new Kewirausahaan;
        $Kewirausahaan->nama_mhs = $request->nama_mhs;
        $Kewirausahaan->nim = $request->nim;
        $Kewirausahaan->kelas = $request->kelas;
        $Kewirausahaan->semester = $request->semester;
        $Kewirausahaan->kegiatan = $request->kegiatan;
        $Kewirausahaan->nama_mitra = $request->nama_mitra;
        $Kewirausahaan->status = 'Dalam Proses Validasi';
        $save = $Kewirausahaan->save();

        if($save){
            return redirect('/admin/wirausaha');
        } else {
            return redirect('/admin/wirausaha');
        }
    }

    public function showeditkwu($id){
        $Kewirausahaan = Kewirausahaan::find($id);
        return view('admin.editkwu', ['Kewirausahaan' => $Kewirausahaan]);
    }

    public function editkwu(Request $request, $id){
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
            'kelas' => $request->kelas,
            'semester' => $request->semester,
            'kegiatan' => $request->kegiatan,
            'nama_mitra' => $request->nama_mitra,
            'status' => $request->status,
        ]);

        return redirect('/admin/wirausaha');
    }

    public function hapuskwu($id){
        Kewirausahaan::find($id)->delete();
        return redirect('/admin/wirausaha');
    }

    public function createuser(Request $request){
        $rules = [
            'name' => 'required|min:5|max:50',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed',
            'nim' => 'required',
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
            return redirect('/admin/regakun');
        } else {
            Session::flash('errors', ['' => 'Registrasi Gagal, Silakan Ulangi Proses Registrasi Anda']);
            return redirect('/admin/regakun');
        }
    }

    public function showedituser($id){
        $User = User::find($id);
        return view('admin.edituser', ['User' => $User]);
    }

    public function edituser(Request $request, $id){
        $request->validate([
            'name' => 'required|min:5|max:50',
            'email' => 'required',
            'password' => 'required|confirmed',
            'nim' => 'required',
            'kelas' => 'required',
            'semester' => 'required',
        ]);

        User::find($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'nim' => $request->nim,
            'kelas' => $request->kelas,
            'semester' => $request->semester,
        ]);

        return redirect('/admin/regakun');
    }

    public function hapususer($id){
        User::find($id)->delete();
        return redirect('/admin/regakun');
    }

    public function showvalidasi(){
        $Validasi = Validasi::orderBy('id')->get();
        return view('admin.showvalidasi', compact('Validasi'));
    }

    public function createvalid(Request $request){
        $request->validate([
            'nama_mhs' => 'required|min:5|max:50',
            'nim' => 'required|numeric',
            'semester' => 'required',
            'kelas' => 'required',
            'kegiatan' => 'required',
            'status' => 'required',
            'keterangan' => 'required',
        ]);

        $Validasi = new Validasi;
        $Validasi->nama_mhs = $request->nama_mhs;
        $Validasi->nim = $request->nim;
        $Validasi->kelas = $request->kelas;
        $Validasi->semester = $request->semester;
        $Validasi->kegiatan = $request->kegiatan;
        $Validasi->status = $request->status;
        $Validasi->keterangan = $request->keterangan;
        $save = $Validasi->save();

        if($save){
            return redirect('/admin/showvalidasi');
        } else {
            return redirect('/admin/showvalidasi');
        }
    }

    public function showeditvalid($id){
        $Validasi = Validasi::find($id);
        return view('admin.editvalidasi', ['Validasi' => $Validasi]);
    }

    public function editvalid(Request $request, $id){
        $request->validate([
            'nama_mhs' => 'required|min:5|max:50',
            'nim' => 'required|numeric',
            'semester' => 'required',
            'kelas' => 'required',
            'kegiatan' => 'required',
            'status' => 'required',
            'keterangan' => 'required',
        ]);

        Validasi::find($id)->update([
            'nama_mhs' => $request->nama_mhs,
            'nim' => $request->nim,
            'semester' => $request->semester,
            'kelas' => $request->kelas,
            'kegiatan' => $request->kegiatan,
            'status' => $request->status,
            'keterangan' => $request->keterangan
        ]);

        return redirect('/admin/showvalidasi');
    }

    public function hapusvalid($id){
        Validasi::find($id)->delete();
        return redirect('/admin/showvalidasi');
    }

    public function showlprn(){
        $Laporan = Laporan::orderBy('id')->get();
        return view('admin.showlaporan', compact('Laporan'));
    }

    public function showsurat(){
        $Surat = Surat::orderBy('id')->get();
        return view('admin.showsurat', compact('Surat'));
    }

    public function showeditsurat($id){
        $Surat = Surat::find($id);
        return view('admin.editsurat', ['Surat' => $Surat]);
    }

    public function editsurat(Request $request, $id){
        $request->validate([
            'file' => 'required',
            'nama_mhs' => 'required|required|min:5|max:50',
            'nim' => 'required',
            'kelas' => 'required',
            'semester' => 'required',
        ]);

        Surat::find($id)->update([
            'file'=> $request->file,
            'nama_mhs'=> $request->nama_mhs,
            'nim'=> $request->nim,
            'kelas'=> $request->kelas,
            'semester'=> $request->semester,
        ]);

        return redirect('/admin/showsurat');
    }

    public function hapussurat($id){
        Surat::find($id)->delete();
        return redirect('/admin/showsurat');
    }

    public function showeditlprn($id){
        $Laporan = Laporan::find($id);
        return view('admin.editlprn', ['Laporan' => $Laporan]);
    }

    public function editlprn(Request $request, $id){
        $request->validate([
            'nama_mhs' => 'required|min:5|max:50',
            'nim' => 'required|numeric',
            'kelas' => 'required',
            'semester' => 'required',
            'laporan' => 'required'
        ]);

        Laporan::find($id)->update([
            'nama_mhs' => $request->nama_mhs,
            'nim' => $request->nim,
            'kelas' => $request->kelas,
            'semester' => $request->semester,
            'laporan' => $request->laporan,
        ]);

        return redirect('/admin/showlprn');
    }

    public function hapuslprn($id){
        Laporan::find($id)->delete();
        return redirect('/admin/showlprn');
    }

    public function showdok(){
        $File = File::orderBy('id')->get();
        return view('admin.showdok', compact('File'));
    }

    public function showeditdok($id){
        $File = File::find($id);
        return view('admin.editdok', ['File' => $File]);
    }

    public function editdok(Request $request, $id){
        $request->validate([
            'nama_mhs' => 'required|min:5|max:50',
            'nim' => 'required|numeric',
            'kelas' => 'required',
            'semester' => 'required',
            'file' => 'required',
        ]);

        File::find($id)->update([
            'nama_mhs' => $request->nama_mhs,
            'nim' => $request->nim,
            'kelas' => $request->kelas,
            'semester' => $request->semester,
            'file' => $request->file,
            'nilai' => $request->nilai,
        ]);

        return redirect('/admin/showdok');
    }

    public function hapusdok($id){
        File::find($id)->delete();
        return redirect('/admin/showdok');
    }

    public function showmitrastd(){
        $Mitrastudi = Mitrastudi::orderBy('id')->get();
        return view('admin.mitrastudi', compact('Mitrastudi'));
    }

    public function createmitrastd(Request $request){
        $Mitrastudi = New Mitrastudi;
        $Mitrastudi->nama_mitra = $request->nama_mitra;
        $Mitrastudi->save();

        return redirect('/admin/mitrastd');
    }

    public function hapusmitrastd($id){
        Mitrastudi::find($id)->delete();
        return redirect('/admin/mitrastd');
    }

    public function showeditmitrastd($id){
        $Mitrastudi = Mitrastudi::find($id);
        return view('admin.editmitrastudi', ['Mitrastudi' => $Mitrastudi]);
    }

    public function editmitrastd(Request $request, $id){
        $request->validate([
            'nama_mitra' => 'required'
        ]);

        Mitrastudi::find($id)->update([
            'nama_mitra' => $request->nama_mitra
        ]);

        return redirect('/admin/mitrastd');
    }

    public function showmitraplt(){
        $Mitraplt = Mitraplt::orderBy('id')->get();
        return view('admin.mitraplt', compact('Mitraplt'));
    }

    public function createmitraplt(Request $request){
        $Mitraplt = New Mitraplt;
        $Mitraplt->nama_mitra = $request->nama_mitra;
        $Mitraplt->save();

        return redirect('/admin/mitraplt');
    }

    public function hapusmitraplt($id){
        Mitraplt::find($id)->delete();
        return redirect('/admin/mitraplt');
    }

    public function showeditmitraplt($id){
        $Mitraplt = Mitraplt::find($id);
        return view('admin.editmitraplt', ['Mitraplt' => $Mitraplt]);
    }

    public function editmitraplt(Request $request, $id){
        $request->validate([
            'nama_mitra' => 'required'
        ]);

        Mitraplt::find($id)->update([
            'nama_mitra' => $request->nama_mitra
        ]);

        return redirect('/admin/mitraplt');
    }

    public function showmitrakkn(){
        $Mitrakkn = Mitrakkn::orderBy('id')->get();
        return view('admin.mitrakkn', compact('Mitrakkn'));
    }

    public function createmitrakkn(Request $request){
        $Mitrakkn = New Mitrakkn;
        $Mitrakkn->nama_mitra = $request->nama_mitra;
        $Mitrakkn->save();

        return redirect('/admin/mitrakkn');
    }

    public function hapusmitrakkn($id){
        Mitrakkn::find($id)->delete();
        return redirect('/admin/mitrakkn');
    }

    public function showeditmitrakkn($id){
        $Mitrakkn = Mitrakkn::find($id);
        return view('admin.editmitrakkn', ['Mitrakkn' => $Mitrakkn]);
    }

    public function editmitrakkn(Request $request, $id){
        $request->validate([
            'nama_mitra' => 'required'
        ]);

        Mitrakkn::find($id)->update([
            'nama_mitra' => $request->nama_mitra
        ]);

        return redirect('/admin/mitrakkn');
    }

    public function showmitrakwu(){
        $Mitrakwu = Mitrakwu::orderBy('id')->get();
        return view('admin.mitrakwu', compact('Mitrakwu'));
    }

    public function createmitrakwu(Request $request){
        $Mitrakwu = New Mitrakwu;
        $Mitrakwu->nama_mitra = $request->nama_mitra;
        $Mitrakwu->save();

        return redirect('/admin/mitrakwu');
    }

    public function hapusmitrakwu($id){
        Mitrakwu::find($id)->delete();
        return redirect('/admin/mitrakwu');
    }

    public function showeditmitrakwu($id){
        $Mitrakwu = Mitrakwu::find($id);
        return view('admin.editmitrakwu', ['Mitrakwu' => $Mitrakwu]);
    }

    public function editmitrakwu(Request $request, $id){
        $request->validate([
            'nama_mitra' => 'required'
        ]);

        Mitrakwu::find($id)->update([
            'nama_mitra' => $request->nama_mitra
        ]);

        return redirect('/admin/mitrakwu');
    }

    public function showmitraajar(){
        $Mitraajar = Mitraajar::orderBy('id')->get();
        return view('admin.mitraajar', compact('Mitraajar'));
    }

    public function createmitraajar(Request $request){
        $Mitraajar = New Mitraajar;
        $Mitraajar->nama_mitra = $request->nama_mitra;
        $Mitraajar->save();

        return redirect('/admin/mitraajar');
    }

    public function hapusmitraajar($id){
        Mitraajar::find($id)->delete();
        return redirect('/admin/mitraajar');
    }

    public function showeditmitraajar($id){
        $Mitraajar = Mitraajar::find($id);
        return view('admin.editmitraajar', ['Mitraajar' => $Mitraajar]);
    }

    public function editmitraajar(Request $request, $id){
        $request->validate([
            'nama_mitra' => 'required'
        ]);

        Mitraajar::find($id)->update([
            'nama_mitra' => $request->nama_mitra
        ]);

        return redirect('/admin/mitraajar');
    }

    public function showmitraptk(){
        $Mitraptk = Mitraptk::orderBy('id')->get();
        return view('admin.mitraptk', compact('Mitraptk'));
    }

    public function createmitraptk(Request $request){
        $Mitraptk = New Mitraptk;
        $Mitraptk->nama_mitra = $request->nama_mitra;
        $Mitraptk->save();

        return redirect('/admin/mitraptk');
    }

    public function hapusmitraptk($id){
        Mitraptk::find($id)->delete();
        return redirect('/admin/mitraptk');
    }

    public function showeditmitraptk($id){
        $Mitraptk = Mitraptk::find($id);
        return view('admin.editmitraptk', ['Mitraptk' => $Mitraptk]);
    }

    public function editmitraptk(Request $request, $id){
        $request->validate([
            'nama_mitra' => 'required'
        ]);

        Mitraptk::find($id)->update([
            'nama_mitra' => $request->nama_mitra
        ]);

        return redirect('/admin/mitraptk');
    }

    public function showmitrakms(){
        $Mitrakms = Mitrakms::orderBy('id')->get();
        return view('admin.mitrakms', compact('Mitrakms'));
    }

    public function createmitrakms(Request $request){
        $Mitrakms = New Mitrakms;
        $Mitrakms->nama_mitra = $request->nama_mitra;
        $Mitrakms->save();

        return redirect('/admin/mitrakms');
    }

    public function hapusmitrakms($id){
        Mitrakms::find($id)->delete();
        return redirect('/admin/mitrakms');
    }

    public function showeditmitrakms($id){
        $Mitrakms = Mitrakms::find($id);
        return view('admin.editmitrakms', ['Mitrakms' => $Mitrakms]);
    }

    public function editmitrakms(Request $request, $id){
        $request->validate([
            'nama_mitra' => 'required'
        ]);

        Mitrakms::find($id)->update([
            'nama_mitra' => $request->nama_mitra
        ]);

        return redirect('/admin/mitrakms');
    }

    public function showmitramagang(){
        $Mitramagang = Mitramagang::orderBy('id')->get();
        return view('admin.mitramagang', compact('Mitramagang'));
    }

    public function createmitramagang(Request $request){
        $Mitramagang = New Mitramagang;
        $Mitramagang->nama_mitra = $request->nama_mitra;
        $Mitramagang->save();

        return redirect('/admin/mitramagang');
    }

    public function hapusmitramagang($id){
        Mitramagang::find($id)->delete();
        return redirect('/admin/mitrakms');
    }

    public function showeditmitramagang($id){
        $Mitramagang = Mitramagang::find($id);
        return view('admin.editmitramagang', ['Mitramagang' => $Mitramagang]);
    }

    public function editmitramagang(Request $request, $id){
        $request->validate([
            'nama_mitra' => 'required'
        ]);

        Mitramagang::find($id)->update([
            'nama_mitra' => $request->nama_mitra
        ]);

        return redirect('/admin/mitramagang');
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
