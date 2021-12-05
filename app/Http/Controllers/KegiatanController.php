<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mitrastudi;
use App\Models\Mitraptk;
use App\Models\Mitraplt;
use App\Models\Mitrakms;
use App\Models\Mitrakwu;
use App\Models\Mitramagang;
use App\Models\Mitraajar;
use App\Models\Mitrakkn;
use App\Models\Magang;
use App\Models\Kkn;
use App\Models\Kewirausahaan;
use App\Models\Penelitian;
use App\Models\Pertukaran;
use App\Models\Mengajar;
use App\Models\Studi;
use App\Models\Kemanusiaan;
use Illuminate\Support\Facades\Auth;

class KegiatanController extends Controller
{
    public function kemanusiaan(){
        return view('kegiatan.kemanusiaan');
    }

    public function magang(){
        return view('kegiatan.magang');
    }

    public function kkn(){
        return view('kegiatan.kkn');
    }

    public function pertukaran(){
        return view('kegiatan.pertukaran');
    }

    public function wirausaha(){
        return view('kegiatan.wirausaha');
    }

    public function studi(){
        return view('kegiatan.studi');
    }

    public function penelitian(){
        return view('kegiatan.penelitian');
    }

    public function mengajar(){
        return view('kegiatan.mengajar');
    }

    public function mitrakms(){
        $Mitrakms = Mitrakms::orderBy('id')->get();
        return view('kegiatan.mitrakms', compact('Mitrakms'));
    }

    public function showdfkms($id){
        $Mitrakms = Mitrakms::find($id);
        return view('kegiatan.showdfkms', ['Mitrakms' => $Mitrakms]);
    }

    public function dfkms(Request $request){
        $kms = new Kemanusiaan;
        $kms->users_id = Auth::id();
        $kms->nim = Auth::user()->nim;
        $kms->nama_mhs = Auth::user()->name;
        $kms->kelas = Auth::user()->kelas;
        $kms->semester = Auth::user()->semester;
        $kms->kegiatan = $request->kegiatan;
        $kms->nama_mitra = $request->nama_mitra;
        $kms->status = 'Dalam Proses Validasi';
        $save = $kms->save();

        if($save){
            return redirect('/mahasiswa/index');
        } else {
            return redirect('/kegiatan/showdfkms');
        }
    }


    public function mitramagang(){
        $Mitramagang = Mitramagang::orderBy('id')->get();
        return view('kegiatan.mitramagang', compact('Mitramagang'));
    }

    public function showdfmagang($id){
        $Mitramagang = Mitramagang::find($id);
        return view('kegiatan.showdfmagang', ['Mitramagang' => $Mitramagang]);
    }

    public function dfmagang(Request $request){
        $Magang = new Magang;
        $Magang->users_id = Auth::id();
        $Magang->nim = Auth::user()->nim;
        $Magang->nama_mhs = Auth::user()->name;
        $Magang->kelas = Auth::user()->kelas;
        $Magang->semester = Auth::user()->semester;
        $Magang->kegiatan = $request->kegiatan;
        $Magang->nama_mitra = $request->nama_mitra;
        $Magang->status = 'Dalam Proses Validasi';
        $save = $Magang->save();

        if($save){
            return redirect('/mahasiswa/index');
        } else {
            return redirect('/kegiatan/showdfmagang');
        }
    }

    public function mitrastudi(){
        $Mitrastudi = Mitrastudi::orderBy('id')->get();
        return view('kegiatan.mitrastudi', compact('Mitrastudi'));
    }

    public function showdfstudi($id){
        $Mitrastudi = Mitrastudi::find($id);
        return view('kegiatan.showdfstudi', ['Mitrastudi' => $Mitrastudi]);
    }

    public function dfstudi(Request $request){
        $Studi = new Studi;
        $Studi->users_id = Auth::id();
        $Studi->nim = Auth::user()->nim;
        $Studi->nama_mhs = Auth::user()->name;
        $Studi->kelas = Auth::user()->kelas;
        $Studi->semester = Auth::user()->semester;
        $Studi->kegiatan = $request->kegiatan;
        $Studi->nama_mitra = $request->nama_mitra;
        $Studi->status = 'Dalam Proses Validasi';
        $save = $Studi->save();

        if($save){
            return redirect('/mahasiswa/index');
        } else {
            return redirect('/kegiatan/showdfstudi');
        }
    }

    public function mitrakkn(){
        $Mitrakkn = Mitrakkn::orderBy('id')->get();
        return view('kegiatan.mitrakkn', compact('Mitrakkn'));
    }

    public function showdfkkn($id){
        $Mitrakkn = Mitrakkn::find($id);
        return view('kegiatan.showdfkkn', ['Mitrakkn' => $Mitrakkn]);
    }

    public function dfkkn(Request $request){
        $kkn = new Kkn;
        $kkn->users_id = Auth::id();
        $kkn->nim = Auth::user()->nim;
        $kkn->nama_mhs = Auth::user()->name;
        $kkn->kelas = Auth::user()->kelas;
        $kkn->semester = Auth::user()->semester;
        $kkn->kegiatan = $request->kegiatan;
        $kkn->nama_mitra = $request->nama_mitra;
        $kkn->status = 'Dalam Proses Validasi';
        $save = $kkn->save();

        if($save){
            return redirect('/mahasiswa/index');
        } else {
            return redirect('/kegiatan/showdfkkn');
        }
    }

    public function mitraptk(){
        $Mitraptk = Mitraptk::orderBy('id')->get();
        return view('kegiatan.mitraptk', compact('Mitraptk'));
    }

    public function showdfptk($id){
        $Mitraptk = Mitraptk::find($id);
        return view('kegiatan.showdfptk', ['Mitraptk' => $Mitraptk]);
    }

    public function dfptk(Request $request){
        $ptk = new Pertukaran;
        $ptk->users_id = Auth::id();
        $ptk->nim = Auth::user()->nim;
        $ptk->nama_mhs = Auth::user()->name;
        $ptk->kelas = Auth::user()->kelas;
        $ptk->semester = Auth::user()->semester;
        $ptk->kegiatan = $request->kegiatan;
        $ptk->nama_mitra = $request->nama_mitra;
        $ptk->status = 'Dalam Proses Validasi';
        $save = $ptk->save();

        if($save){
            return redirect('/mahasiswa/index');
        } else {
            return redirect('/kegiatan/showdfptk');
        }
    }

    public function mitrakwu(){
        $Mitrakwu = Mitrakwu::orderBy('id')->get();
        return view('kegiatan.mitrakwu', compact('Mitrakwu'));
    }

    public function showdfkwu($id){
        $Mitrakwu = Mitrakwu::find($id);
        return view('kegiatan.showdfkwu', ['Mitrakwu' => $Mitrakwu]);
    }

    public function dfkwu(Request $request){
        $kwu = new Kewirausahaan;
        $kwu->users_id = Auth::id();
        $kwu->nim = Auth::user()->nim;
        $kwu->nama_mhs = Auth::user()->name;
        $kwu->kelas = Auth::user()->kelas;
        $kwu->semester = Auth::user()->semester;
        $kwu->kegiatan = $request->kegiatan;
        $kwu->nama_mitra = $request->nama_mitra;
        $kwu->status = 'Dalam Proses Validasi';
        $save = $kwu->save();

        if($save){
            return redirect('/mahasiswa/index');
        } else {
            return redirect('/kegiatan/showdfkwu');
        }
    }

    public function mitrastd(){
        return view('kegiatan.mitrastd');
    }

    public function mitraplt(){
        $Mitraplt = Mitraplt::orderBy('id')->get();
        return view('kegiatan.mitraplt', compact('Mitraplt'));
    }

    public function showdfplt($id){
        $Mitraplt = Mitraplt::find($id);
        return view('kegiatan.showdfplt', ['Mitraplt' => $Mitraplt]);
    }

    public function dfplt(Request $request){
        $plt = new Penelitian;
        $plt->users_id = Auth::id();
        $plt->nim = Auth::user()->nim;
        $plt->nama_mhs = Auth::user()->name;
        $plt->kelas = Auth::user()->kelas;
        $plt->semester = Auth::user()->semester;
        $plt->kegiatan = $request->kegiatan;
        $plt->nama_mitra = $request->nama_mitra;
        $plt->status = 'Dalam Proses Validasi';
        $save = $plt->save();

        if($save){
            return redirect('/mahasiswa/index');
        } else {
            return redirect('/kegiatan/showdfplt');
        }
    }

    public function mitraajar(){
        $Mitraajar = Mitraajar::orderBy('id')->get();
        return view('kegiatan.mitraajar', compact('Mitraajar'));
    }

    public function showdfajar($id){
        $Mitraajar = Mitraajar::find($id);
        return view('kegiatan.showdfajar', ['Mitraajar' => $Mitraajar]);
    }

    public function dfajar(Request $request){
        $ajar = new Mengajar;
        $ajar->users_id = Auth::id();
        $ajar->nim = Auth::user()->nim;
        $ajar->nama_mhs = Auth::user()->name;
        $ajar->kelas = Auth::user()->kelas;
        $ajar->semester = Auth::user()->semester;
        $ajar->kegiatan = $request->kegiatan;
        $ajar->nama_mitra = $request->nama_mitra;
        $ajar->status = 'Dalam Proses Validasi';
        $save = $ajar->save();

        if($save){
            return redirect('/mahasiswa/index');
        } else {
            return redirect('/kegiatan/showdfajar');
        }
    }

    public function mbkm(){
        return view('kegiatan.mbkm');
    }

}
