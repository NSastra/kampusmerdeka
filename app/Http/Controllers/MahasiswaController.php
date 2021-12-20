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

    public function statusdaftar(){
        $Magang = Magang::where('users_id', Auth::id())->get();
        $Penelitian = Penelitian::where('users_id', Auth::id())->get();
        $Pertukaran = Pertukaran::where('users_id', Auth::id())->get();
        $Studi = Studi::where('users_id', Auth::id())->get();
        $Kewirausahaan = Kewirausahaan::where('users_id', Auth::id())->get();
        $Kemanusiaan = Kemanusiaan::where('users_id', Auth::id())->get();
        $Mengajar = Mengajar::where('users_id', Auth::id())->get();
        $Kkn = Kkn::where('users_id', Auth::id())->get();
        return view('mahasiswa.statusdaftar', compact('Magang', 'Studi', 'Kemanusiaan', 'Kkn', 'Penelitian', 'Mengajar', 'Pertukaran', 'Kewirausahaan'));
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

    public function showchangepw(){
        return view('mahasiswa.changepw');
    }

    public function changepassword(Request $request){
        $user = Auth::user();

        $userPassword = $user->password;

        $request->validate([
                'current_password' => 'required',
                'password' => 'required|string|min:8|confirmed',
                'password_confirmation' => 'required',
            ]);

        if(!Hash::check($request->current_password, $userPassword)){
            return back()->withErrors(['current_password' => 'Password salah']);
        }

        if(strcmp($request->get('current_password'), $request->get('password')) == 0){
                return back()->withErrors(['password' => 'Password baru tidak boleh sama dengan password lama']);
            }

        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('/mahasiswa/profile');
    }

    public function showeditprofil(){
        return view('mahasiswa.showeditprofil');
    }

    public function editprofil(Request $request){
       $user = Auth::user();
       $user->name = $request->name;
       $user->kelas = $request->kelas;
       $user->nim = $request->nim;
       $user->semester = $request->semester;
       $save = $user->save();

       if($save){
           return redirect('/mahasiswa/profile');
       } else {
           return redirect('/mahasiswa/showeditprofil');
       }
    }

    // public function uploadfoto(Request $request){
    //     $fileModel = new Foto;

    //     if($request->file()){
    //         $fileName = time().'-'.$request->file->getClientOriginalName();
    //         $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');

    //         $fileModel->nama_file = time().'-'.$request->file->getClientOriginalName();
    //         $fileModel->file_path = '/storage/foto' . $filePath;
    //         $fileModel->users_id = Auth::id();
    //         $fileModel->nama_mhs = Auth::user()->name;
    //         $fileModel->nim = Auth::user()->nim;
    //         $fileModel->kelas = Auth::user()->kelas;
    //         $fileModel->semester = Auth::user()->semester;
    //         $fileModel->save();

    //         return redirect('/mahasiswa/profile');
    //     }
    // }
}
