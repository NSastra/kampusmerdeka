<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KaprodiController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Pendaftaran\KemanusiaanController;
use App\Http\Controllers\Pendaftaran\KknController;
use App\Http\Controllers\Pendaftaran\MagangController;
use App\Http\Controllers\Pendaftaran\MengajarController;
use App\Http\Controllers\Pendaftaran\PenelitianController;
use App\Http\Controllers\Pendaftaran\PertukaranController;
use App\Http\Controllers\Pendaftaran\StudiController;
use App\Http\Controllers\Pendaftaran\WirausahaController;
// use App\Http\Controllers\Pendaftaran\MagangController;
// use App\Http\Controllers\Pendaftaran\KknController;
// use App\Http\Controllers\Pendaftaran\MengajarController;
// use App\Http\Controllers\Pendaftaran\PenelitianController;
// use App\Http\Controllers\Pendaftaran\StudiController;
// use App\Http\Controllers\Pendaftaran\KemanusiaanController;
// use App\Http\Controllers\Pendaftaran\WirausahaController;
// use App\Http\Controllers\Pendaftaran\PertukaranController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::post('/auth/login', [AuthController::class, 'login']);
Route::get('/', [HomeController::class, 'index']);
Route::get('home/index', [HomeController::class, 'index']);

//route group middleware ini berfungsi untuk mengecek session, jika belum login -
//maka halaman tidak bisa ditampilkan
Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin/index', [AdminController::class, 'index']);
    Route::get('/kaprodi/index', [KaprodiController::class, 'index']);
    Route::get('/mahasiswa/index', [MahasiswaController::class, 'index']);
    Route::get('/admin/logout', [AdminController::class, 'logout']);
    Route::get('/kaprodi/logout', [KaprodiController::class, 'logout']);
    Route::get('/mahasiswa/logout', [MahasiswaController::class, 'logout']);
});

//Route::get('/admin/index', [AdminController::class, 'index']);
Route::get('admin/showlogin', [AdminController::class, 'showlogin']);
Route::post('/admin/login', [AdminController::class, 'login']);
Route::get('/admin/showregister', [AdminController::class, 'showregister']);
Route::post('/admin/register', [AdminController::class, 'register']);

Route::get('/admin/showvalidasi', [AdminController::class, 'showvalidasi']);
Route::post('/admin/createvalid', [AdminController::class, 'createvalid']);
Route::get('/admin/showeditvalid/{id}', [AdminController::class, 'showeditvalid']);
Route::put('/admin/editvalid/{id}', [AdminController::class, 'editvalid']);
Route::delete('/admin/hapusvalid/{id}', [AdminController::class, 'hapusvalid']);

Route::get('/admin/magang', [AdminController::class, 'showmagang']);
Route::post('/admin/createmagang', [AdminController::class, 'createmagang']);
Route::delete('/admin/hapusmagang/{id}', [AdminController::class, 'hapusmagang']);
Route::get('/admin/showeditmagang/{id}', [AdminController::class, 'showeditmagang']);
Route::put('/admin/editmagang/{id}', [AdminController::class, 'editmagang']);
Route::get('/admin/printmagang2122', [AdminController::class, 'printmagang2122']);
Route::get('/admin/printmagang2223', [AdminController::class, 'printmagang2223']);

Route::get('/admin/kkn', [AdminController::class, 'showkkn']);
Route::post('/admin/createkkn', [AdminController::class, 'createkkn']);
Route::get('/admin/showeditkkn/{id}', [AdminController::class, 'showeditkkn']);
Route::put('/admin/editkkn/{id}', [AdminController::class, 'editkkn']);
Route::delete('/admin/hapuskkn/{id}', [AdminController::class, 'hapuskkn']);
Route::get('/admin/printkkn2122', [AdminController::class, 'printkkn2122']);
Route::get('/admin/printkkn2223', [AdminController::class, 'printkkn2223']);

Route::get('/admin/wirausaha', [AdminController::class, 'showwirausaha']);
Route::post('/admin/createkwu', [AdminController::class, 'createkwu']);
Route::get('/admin/showeditkwu/{id}', [AdminController::class, 'showeditkwu']);
Route::put('/admin/editkwu/{id}', [AdminController::class, 'editkwu']);
Route::delete('/admin/hapuskwu/{id}', [AdminController::class, 'hapuskwu']);
Route::get('/admin/printkwu2122', [AdminController::class, 'printkwu2122']);
Route::get('/admin/printkwu2223', [AdminController::class, 'printkwu2223']);

ROute::get('/admin/kemanusiaan', [AdminController::class, 'showkemanusiaan']);
Route::post('/admin/createkms', [AdminController::class, 'createkms']);
Route::get('/admin/showeditkms/{id}', [AdminController::class, 'showeditkms']);
Route::put('/admin/editkms/{id}', [AdminController::class, 'editkms']);
Route::delete('/admin/hapuskms/{id}', [AdminController::class, 'hapuskms']);
Route::get('/admin/printkms2122', [AdminController::class, 'printkms2122']);
Route::get('/admin/printkms2223', [AdminController::class, 'printkms2223']);

Route::get('/admin/mengajar', [AdminController::class, 'showmengajar']);
Route::post('/admin/createajar', [AdminController::class, 'createajar']);
Route::get('/admin/showeditajar/{id}', [AdminController::class, 'showeditajar']);
Route::put('/admin/editajar/{id}', [AdminController::class, 'editajar']);
Route::delete('/admin/hapusajar/{id}', [AdminController::class, 'hapusajar']);
Route::get('/admin/printajar2122', [AdminController::class, 'printajar2122']);
Route::get('/admin/printajar2223', [AdminController::class, 'printajar2223']);

Route::get('/admin/pertukaran', [AdminController::class, 'showpertukaran']);
Route::post('/admin/createptk', [AdminController::class, 'createptk']);
Route::get('/admin/showeditptk/{id}', [AdminController::class, 'showeditptk']);
Route::put('/admin/editptk/{id}', [AdminController::class, 'editptk']);
Route::delete('/admin/hapusptk/{id}', [AdminController::class, 'hapusptk']);
Route::get('/admin/printptk2122', [AdminController::class, 'printptk2122']);
Route::get('/admin/printptk2223', [AdminController::class, 'printptk2223']);

Route::get('/admin/penelitian', [AdminController::class, 'showpenelitian']);
Route::post('/admin/createplt', [AdminController::class, 'createplt']);
Route::get('/admin/showeditplt/{id}', [AdminController::class, 'showeditplt']);
Route::put('/admin/editplt/{id}', [AdminController::class, 'editplt']);
Route::delete('/admin/hapusplt/{id}', [AdminController::class, 'hapusplt']);
Route::get('/admin/printplt2122', [AdminController::class, 'printplt2122']);
Route::get('/admin/printplt2223', [AdminController::class, 'printplt2223']);

Route::get('/admin/studi', [AdminController::class, 'showstudi']);
Route::post('/admin/createstudi', [AdminController::class, 'createstudi']);
Route::get('/admin/showeditstudi/{id}', [AdminController::class, 'showeditstudi']);
Route::put('/admin/editstudi/{id}', [AdminController::class, 'editstudi']);
Route::delete('/admin/hapusstudi/{id}', [AdminController::class, 'hapusstudi']);
Route::get('/admin/printstudi2122', [AdminController::class, 'printstudi2122']);
Route::get('/admin/printstudi2223', [AdminController::class, 'printstudi2223']);

Route::get('/admin/mitrastd', [AdminController::class, 'showmitrastd']);
Route::post('/admin/createmitrastd', [AdminController::class, 'createmitrastd']);
Route::get('/admin/showeditmitrastd/{id}', [AdminController::class, 'showeditmitrastd']);
Route::put('/admin/editmitrastd/{id}', [AdminController::class, 'editmitrastd']);
Route::delete('/admin/hapusmitrastd/{id}', [AdminController::class, 'hapusmitrastd']);

Route::get('/admin/mitrakkn', [AdminController::class, 'showmitrakkn']);
Route::post('/admin/createmitrakkn', [AdminController::class, 'createmitrakkn']);
Route::get('/admin/showeditmitrakkn/{id}', [AdminController::class, 'showeditmitrakkn']);
Route::put('/admin/editmitrakkn/{id}', [AdminController::class, 'editmitrakkn']);
Route::delete('/admin/hapusmitrakkn/{id}', [AdminController::class, 'hapusmitrakkn']);

Route::get('/admin/mitrakwu', [AdminController::class, 'showmitrakwu']);
Route::post('/admin/createmitrakwu', [AdminController::class, 'createmitrakwu']);
Route::get('/admin/showeditmitrakwu/{id}', [AdminController::class, 'showeditmitrakwu']);
Route::put('/admin/editmitrakwu/{id}', [AdminController::class, 'editmitrakwu']);
Route::delete('/admin/hapusmitrakwu/{id}', [AdminController::class, 'hapusmitrakwu']);

Route::get('/admin/mitraplt', [AdminController::class, 'showmitraplt']);
Route::post('/admin/createmitraplt', [AdminController::class, 'createmitraplt']);
Route::get('/admin/showeditmitraplt/{id}', [AdminController::class, 'showeditmitraplt']);
Route::put('/admin/editmitraplt/{id}', [AdminController::class, 'editmitraplt']);
Route::delete('/admin/hapusmitraplt/{id}', [AdminController::class, 'hapusmitraplt']);

Route::get('/admin/mitraajar', [AdminController::class, 'showmitraajar']);
Route::post('/admin/createmitraajar', [AdminController::class, 'createmitraajar']);
Route::get('/admin/showeditmitraajar/{id}', [AdminController::class, 'showeditmitraajar']);
Route::put('/admin/editmitraajar/{id}', [AdminController::class, 'editmitraajar']);
Route::delete('/admin/hapusmitraajar/{id}', [AdminController::class, 'hapusmitraajar']);

Route::get('/admin/mitraptk', [AdminController::class, 'showmitraptk']);
Route::post('/admin/createmitraptk', [AdminController::class, 'createmitraptk']);
Route::get('/admin/showeditmitraptk/{id}', [AdminController::class, 'showeditmitraptk']);
Route::put('/admin/editmitraptk/{id}', [AdminController::class, 'editmitraptk']);
Route::delete('/admin/hapusmitraptk/{id}', [AdminController::class, 'hapusmitraptk']);

Route::get('/admin/mitrakms', [AdminController::class, 'showmitrakms']);
Route::post('/admin/createmitrakms', [AdminController::class, 'createmitrakms']);
Route::get('/admin/showeditmitrakms/{id}', [AdminController::class, 'showeditmitrakms']);
Route::put('/admin/editmitrakms/{id}', [AdminController::class, 'editmitrakms']);
Route::delete('/admin/hapusmitrakms/{id}', [AdminController::class, 'hapusmitrakms']);

Route::get('/admin/mitramagang', [AdminController::class, 'showmitramagang']);
Route::post('/admin/createmitramagang', [AdminController::class, 'createmitramagang']);
Route::get('/admin/showeditmitramagang/{id}', [AdminController::class, 'showeditmitramagang']);
Route::put('/admin/editmitramagang/{id}', [AdminController::class, 'editmitramagang']);
Route::delete('/admin/hapusmitramagang/{id}', [AdminController::class, 'hapusmitramagang']);

Route::get('/admin/regakun', [AdminController::class, 'showregakun']);
Route::post('/admin/createuser', [AdminController::class, 'createuser']);
Route::get('/admin/showedituser/{id}', [AdminController::class, 'showedituser']);
Route::put('/admin/edituser/{id}', [AdminController::class, 'edituser']);
Route::delete('/admin/hapususer/{id}', [AdminController::class, 'hapususer']);

Route::get('/admin/showlprn', [AdminController::class, 'showlprn']);
Route::get('/admin/showeditlprn/{id}', [AdminController::class, 'showeditlprn']);
Route::put('/admin/editlprn/{id}', [AdminController::class, 'editlprn']);
Route::delete('/admin/hapuslprn/{id}', [AdminController::class, 'hapuslprn']);

Route::get('/admin/showdok', [AdminController::class, 'showdok']);
Route::get('/admin/showeditdok/{id}', [AdminController::class, 'showeditdok']);
Route::put('/admin/editdok/{id}', [AdminController::class, 'editdok']);
Route::delete('/admin/hapusdok/{id}', [AdminController::class, 'hapusdok']);

Route::get('/admin/showsurat', [AdminController::class, 'showsurat']);
Route::get('/admin/showeditsurat/{id}', [AdminController::class, 'showeditsurat']);
Route::put('/admin/editsurat/{id}', [AdminController::class, 'editsurat']);
Route::delete('/admin/hapussurat/{id}', [AdminController::class, 'hapussurat']);

Route::post('/kaprodi/login', [KaprodiController::class, 'login']);
Route::get('kaprodi/showlogin', [KaprodiController::class, 'showlogin']);
Route::get('/kaprodi/showregister', [KaprodiController::class, 'showregister']);
Route::post('/kaprodi/register', [KaprodiController::class, 'register']);

Route::put('/kaprodi/vlkms/{id}', [KaprodiController::class, 'vlkms']);
Route::put('/kaprodi/vlstudi/{id}', [KaprodiController::class, 'vlstudi']);
Route::put('/kaprodi/vlplt/{id}', [KaprodiController::class, 'vlplt']);
Route::put('/kaprodi/vlptk/{id}', [KaprodiController::class, 'vlptk']);
Route::put('/kaprodi/vlkkn/{id}', [KaprodiController::class, 'vlkkn']);
Route::put('/kaprodi/vlmagang/{id}', [KaprodiController::class, 'vlmagang']);
Route::put('/kaprodi/vlajar/{id}', [KaprodiController::class, 'vlajar']);
Route::put('/kaprodi/vlkwu/{id}', [KaprodiController::class, 'vlkwu']);

Route::get('/kaprodi/magang', [KaprodiController::class, 'magang']);
Route::get('/kaprodi/magang/{id}', [KaprodiController::class, 'magangvl_show']);
Route::get('/kaprodi/printmagang', [KaprodiController::class, 'printmagang']);

Route::get('/kaprodi/kkn', [KaprodiController::class, 'kkn']);
Route::get('/kaprodi/kkn/{id}', [KaprodiController::class, 'kknvl_show']);
Route::get('/kaprodi/printkkn2122', [KaprodiController::class, 'printkkn2122']);
Route::get('/kaprodi/printkkn2223', [KaprodiController::class, 'printkkn2223']);

Route::get('/kaprodi/wirausaha', [KaprodiController::class, 'wirausaha']);
Route::get('/kaprodi/kwu/{id}', [KaprodiController::class, 'wirausahavl_show']);
Route::get('/kaprodi/printkwu2122', [KaprodiController::class, 'printkwu2122']);
Route::get('/kaprodi/printkwu2223', [KaprodiController::class, 'printkwu2223']);

Route::get('/kaprodi/penelitian', [KaprodiController::class, 'penelitian']);
Route::get('/kaprodi/penelitian/{id}', [KaprodiController::class, 'penelitianvl_show']);
Route::get('/kaprodi/printplt2122', [KaprodiController::class, 'printplt2122']);
Route::get('/kaprodi/printplt2223', [KaprodiController::class, 'printplt2223']);

Route::get('/kaprodi/mengajar', [KaprodiController::class, 'mengajar']);
Route::get('/kaprodi/mengajar/{id}', [KaprodiController::class, 'mengajarvl_show']);
Route::get('/kaprodi/printajar2122', [KaprodiController::class, 'printajar2122']);
Route::get('/kaprodi/printajar2223', [KaprodiController::class, 'printajar2223']);

Route::get('/kaprodi/pertukaran', [KaprodiController::class, 'pertukaran']);
Route::get('/kaprodi/pertukaran/{id}', [KaprodiController::class, 'pertukaranvl_show']);
Route::get('/kaprodi/printptk2122', [KaprodiController::class, 'printptk']);
Route::get('/kaprodi/printptk2223', [KaprodiController::class, 'printptk2223']);

Route::get('/kaprodi/studi', [KaprodiController::class, 'studi']);
Route::get('/kaprodi/studi/{id}', [KaprodiController::class, 'studivl_show']);
Route::get('/kaprodi/printstudi2122', [KaprodiController::class, 'printstudi2122']);
Route::get('/kaprodi/printstudi2223', [KaprodiController::class, 'printstudi2223']);

Route::get('/kaprodi/kemanusiaan', [KaprodiController::class, 'kemanusiaan']);
Route::get('/kaprodi/kemanusiaan/{id}', [KaprodiController::class, 'kemanusiaanvl_show']);
Route::get('/kaprodi/printkms2122', [KaprodiController::class, 'printkms2122']);
Route::get('/kaprodi/printkms2223', [KaprodiController::class, 'printkms2223']);

Route::get('/kaprodi/cetakdata2122', [KaprodiController::class, 'cetakdata2122']);
Route::get('/kaprodi/cetakdata2223', [KaprodiController::class, 'cetakdata2223']);

Route::post('/mahasiswa/login', [MahasiswaController::class, 'login']);
Route::get('/mahasiswa/login_n', [MahasiswaController::class, 'login']);
Route::get('mahasiswa/showlogin', [MahasiswaController::class, 'showlogin']);
Route::get('/mahasiswa/showregister', [MahasiswaController::class, 'showregister']);
Route::post('/mahasiswa/register', [MahasiswaController::class, 'register']);

Route::get('/mahasiswa/showdaftarmagang', [MahasiswaController::class, 'showdaftarmagang']);
// Route::get('/mahasiswa/prs/magang', [MahasiswaController::class, 'prsmagang']);
Route::post('/mahasiswa/daftarmagang', [MahasiswaController::class, 'daftarmagang']);

Route::get('/mahasiswa/showdaftarkkn', [MahasiswaController::class, 'showdaftarkkn']);
Route::post('/mahasiswa/daftarkkn', [MahasiswaController::class, 'daftarkkn']);
// Route::get('/mahasiswa/prs/kkn', [MahasiswaController::class, 'prskkn']);

Route::get('/mahasiswa/showdaftarplt', [MahasiswaController::class, 'showdaftarplt']);
Route::post('/mahasiswa/daftarplt', [MahasiswaController::class, 'daftarplt']);

Route::get('/mahasiswa/showdaftarajar', [MahasiswaController::class, 'showdaftarajar']);
Route::post('/mahasiswa/daftarajar', [MahasiswaController::class, 'daftarajar']);

Route::get('/mahasiswa/showdaftarstudi', [MahasiswaController::class, 'showdaftarstudi']);
Route::post('/mahasiswa/daftarstudi', [MahasiswaController::class, 'daftarstudi']);
// Route::get('/mahasiswa/prs/studi', [MahasiswaController::class, 'prsstudi']);

Route::get('/mahasiswa/showdaftarkms', [MahasiswaController::class, 'showdaftarkms']);
Route::post('/mahasiswa/daftarkms', [MahasiswaController::class, 'daftarkms']);

Route::get('/mahasiswa/showdaftarkwu', [MahasiswaController::class, 'showdaftarkwu']);
Route::post('/mahasiswa/daftarkwu', [MahasiswaController::class, 'daftarkwu']);

Route::get('/mahasiswa/showdaftarptk', [MahasiswaController::class, 'showdaftarptk']);
Route::post('/mahasiswa/daftarptk', [MahasiswaController::class, 'daftarptk']);

Route::get('/mahasiswa/profile', [MahasiswaController::class, 'profile']);
Route::post('/mahasiswa/createfile', [MahasiswaController::class, 'createfile']);
Route::post('/mahasiswa/createlprn', [MahasiswaController::class, 'createlprn']);
Route::post('/mahasiswa/createsurat', [MahasiswaController::class, 'createsurat']);
Route::get('/mahasiswa/showcreatelprn', [MahasiswaController::class, 'showcreatelprn']);
Route::get('/mahasiswa/showcreatesurat', [MahasiswaController::class, 'showcreatesurat']);
Route::get('/mahasiswa/showcreatedok', [MahasiswaController::class, 'showcreatedok']);
Route::get('/mahasiswa/downloadsurat', [MahasiswaController::class, 'downloadsurat']);
Route::get('/mahasiswa/downloadlaporan', [MahasiswaController::class, 'downloadlaporan']);
Route::post('/mahasiswa/uploadsurat', [MahasiswaController::class, 'uploadsurat']);
Route::get('/mahasiswa/showuploadsurat', [MahasiswaController::class, 'showuploadsurat']);

Route::get('/kegiatan/kemanusiaan', [KegiatanController::class, 'kemanusiaan']);
Route::get('/kegiatan/menajar', [KegiatanController::class, 'mengajar']);
Route::get('/kegiatan/pertukaran', [KegiatanController::class, 'pertukaran']);
Route::get('/kegiatan/magang', [KegiatanController::class, 'magang']);
Route::get('/kegiatan/kkn', [KegiatanController::class, 'kkn']);
Route::get('/kegiatan/wirausaha', [KegiatanController::class, 'wirausaha']);
Route::get('/kegiatan/penelitian', [KegiatanController::class, 'penelitian']);
Route::get('/kegiatan/studi', [KegiatanController::class, 'studi']);
Route::get('/kegiatan/mbkm', [KegiatanController::class, 'mbkm']);

Route::get('/kegiatan/mitrakms', [KegiatanController::class, 'mitrakms']);
Route::get('/kegiatan/mitraajar', [KegiatanController::class, 'mitraajar']);
Route::get('/kegiatan/mitraptk', [KegiatanController::class, 'mitraptk']);
Route::get('/kegiatan/mitramagang', [KegiatanController::class, 'mitramagang']);
Route::get('/kegiatan/mitrakkn', [KegiatanController::class, 'mitrakkn']);
Route::get('/kegiatan/mitrakwu', [KegiatanController::class, 'mitrakwu']);
Route::get('/kegiatan/mitraplt', [KegiatanController::class, 'mitraplt']);
Route::get('/kegiatan/mitrastudi', [KegiatanController::class, 'mitrastudi']);

Route::get('/kegiatan/showdfmagang/{id}', [KegiatanController::class, 'showdfmagang']);
Route::post('/kegiatan/dfmagang', [KegiatanController::class, 'dfmagang']);

Route::get('/kegiatan/showdfstudi/{id}', [KegiatanController::class, 'showdfstudi']);
Route::post('/kegiatan/dfstudi', [KegiatanController::class, 'dfstudi']);

Route::get('/kegiatan/showdfplt/{id}', [KegiatanController::class, 'showdfplt']);
Route::post('/kegiatan/dfplt', [KegiatanController::class, 'dfplt']);

Route::get('/kegiatan/showdfkkn/{id}', [KegiatanController::class, 'showdfkkn']);
Route::post('/kegiatan/dfkkn', [KegiatanController::class, 'dfkkn']);

Route::get('/kegiatan/showdfkwu/{id}', [KegiatanController::class, 'showdfkwu']);
Route::post('/kegiatan/dfkwu', [KegiatanController::class, 'dfkwu']);

Route::get('/kegiatan/showdfajar/{id}', [KegiatanController::class, 'showdfajar']);
Route::post('/kegiatan/dfajar', [KegiatanController::class, 'dfajar']);

Route::get('/kegiatan/showdfptk/{id}', [KegiatanController::class, 'showdfptk']);
Route::post('/kegiatan/dfptk', [KegiatanController::class, 'dfptk']);

Route::get('/kegiatan/showdfkms/{id}', [KegiatanController::class, 'showdfkms']);
Route::post('/kegiatan/dfkms', [KegiatanController::class, 'dfkms']);
