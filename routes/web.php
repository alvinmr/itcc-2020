<?php

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

/*=========================================================================================
                                    LANDING ROUTE
=========================================================================================*/

Route::get('/sendmail', function(){
    // $email = new App\Mail\EmailVerification();

    // Mail::to("maildummy888@gmail.com")->send($email);
    // return view('emails.new');
});

/*Route::get('/coba', 'ParticipantController@index');
Route::post('/coba', 'ParticipantController@store');*/

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    // return what you want
});

/*Route::get('/landingold', function () {
    return view('landing.landing');
});*/

// Pendaftaran Panitia
/*Route::get('/', function () {
    return view('pendaftaran-panitia.landing');
});
Route::resource('/DaftarPanitia','PendaftaranPanitiaController');
Route::get('/sie', function () {
    return view('pendaftaran-panitia.sie');
});*/

/*ROUTE 2019*/
/*Route::get('/', function () {
    return view('landing.landingnew');
});*/

/*LANDING 2020*/
Route::get('/', function () {
     return view('landing2020/landing');
});

//Informasi
Route::prefix('info')->group(function(){
    Route::get('/1','InfoController@showInfoGuidebook');
    /*Route::get('/2','InfoController@showInfoPluginLibrary');*/
    Route::get('/3', function () {
         return view('info/perubahanjadwal');
    });
});


Route::get('/comming', function () {
    return view('comming-soon');
});

Route::get('/comingsoon', function () {
    return Redirect::to('https://comingsoon.itcc-udayana.com');
});


Route::get('/faq', function () {
    return view('landing2020.faq');
});

Route::prefix('landing')->group(function(){
    Route::get('/pemrograman','LandingController@showPemrograman')->name('detail.prog');
    Route::get('/desainWeb','LandingController@showWeb')->name('detail.web');
    Route::get('/cerdasCermat','LandingController@showLcc')->name('detail.lcc');
    Route::get('/inovasiKreatif','LandingController@showInovasi')->name('detail.inovasi');
    Route::get('/ideBisnis','LandingController@showIdea')->name('detail.idea');
    Route::get('/pengembangan-aplikasi-android','LandingController@showPaa')->name('detail.si');
    Route::get('/mobileAppDevelopment','LandingController@showSoftware')->name('detail.software');
});

Route::prefix('hasil-lomba')->group(function(){
    Route::get('/inovasiKreatif','LandingController@showHasilInovasi')->name('hasil.inovasi');
    Route::get('/ideBisnis','LandingController@showHasilIdea')->name('hasil.idea');
    Route::get('/mobileAppDevelopment','LandingController@showHasilMobileApp')->name('hasil.mobileapp');
});

/*=========================================================================================
                                    PESERTA ROUTE
=========================================================================================*/
/* AUTH PESERTA */

//response for ajax
Route::get('/participant/{id}', 'ParticipantController@show');

Route::get('/login', 'Auth\GroupLoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\GroupLoginController@login');
Route::post('/logout', 'Auth\GroupLoginController@logout');

Route::prefix('daftar')->group(function(){
    Route::get('/inovasikreatif', 'Auth\GroupRegisterController@showInovasiRegistrationForm')->name('regis.inovasi');
    Route::get('/idebisnis', 'Auth\GroupRegisterController@showIdeaRegistrationForm')->name('regis.idea');
    /*Route::get('/inovasikreatif', function(){
        return view('peserta.inovasi-belum-dibuka');
    });
    Route::get('/idebisnis', function(){
        return view('peserta.ide-bisnis-belum-dibuka');
    });*/
    Route::get('/mobileappdevelopment', 'Auth\GroupRegisterController@showSoftdevRegistrationForm')->name('regis.software');
});

Route::post('/daftar', 'Auth\GroupRegisterController@register');

Route::resource('dashboard','DashboardController');

Route::get('/verifikasi','DashboardController@showVerificationForm');
Route::post('/verifikasi','DashboardController@uploadVerification');

/*Route::get('/upload','DashboardController@showUploadDataForm');*/
Route::get('/upload',function(){
    return redirect('dashboard')->with('warning', 'Periode pengumpulan proposal telah ditutup');
});
Route::post('/upload','DashboardController@uploadData');

Route::get('/uploadVideoAPK','DashboardController@showUploadVideoAPKForm');
/*Route::get('/uploadVideoAPK',function(){
    return redirect('dashboard')->with('warning', 'Tahap submisi 2 belum dimulai');
});*/
Route::post('/uploadVideoAPK','DashboardController@uploadVideoAPK');

/*Route::get('/uploadPowerPoint','DashboardController@showUploadPowerPointForm');*/
Route::get('/uploadPowerPoint',function(){
    return redirect('dashboard')->with('warning', 'Upload PowerPoint dibuka saat babak Final bagi Finalis');
});
Route::post('/uploadPowerPoint','DashboardController@uploadPowerPoint');

/*Route::get('/uploadPosterInovasi','DashboardController@showUploadPosterForm');*/
Route::get('/uploadPosterInovasi',function(){
    return redirect('dashboard')->with('warning', 'Upload Poster dibuka saat babak Final bagi Finalis');
});
Route::get('/uploadPoster','DashboardController@showUploadPosterForm');
Route::post('/uploadPoster','DashboardController@uploadPoster');

// Route::get('/uploadBerkasWeb', 'DashboardController@showUploadBerkasForm');
Route::get('/uploadBerkasWeb', function(){
    return redirect('dashboard')->with('warning', 'Tahap upload berkas web belum dimulai');
});
Route::post('/uploadBerkasWeb', 'DashboardController@uploadBerkasWeb');

Route::get('/setting','DashboardController@showSettingForm');

Route::resource('/pesanUser','UserMassageController');

Route::get('/pesanUserKeluar','UserMassageController@pesanTerkirim');

Route::get('/pesanUserKeluarShow/{pesanUserKeluarShow}','UserMassageController@showMsgOut');

Route::delete('/pesanUserKeluar/{pesanUserKeluar}','UserMassageController@deletUserMsg');

Route::post('/change/password', 'DashboardController@gantiPassword');

Route::get('/verifyemail/{token}','Auth\GroupRegisterController@verify');

Route::get('/debugemail','Auth\GroupRegisterController@seeEmail');

/*=========================================================================================
                                    ADMIN ROUTE
=========================================================================================*/

Route::get('/verifikasiPeserta','AdminController@showFormPembayaran');

Route::get('/logUpload','AdminController@showFormLogUpload');

Route::get('/tambahPeserta','AdminController@showFormTambahPeserta');

Route::get('/tambahJuri','AdminController@showFormTambahJuri');

Route::get('/inputFormPenilaian','AdminController@showFormInputPenilaian');

Route::resource('/pesanAdmin','AdminMassageController');

Route::get('/pesanAdminKeluar','AdminMassageController@showMsgOut');

Route::get('/pesanAdminKeluar/{pesanAdminKeluar}','AdminMassageController@msgOutShow');

Route::delete('/pesanAdminKeluar/{pesanAdminKeluar}','AdminMassageController@deleteMsg');

Route::post('/tambahJuriSimpan','AdminController@storeJury');

Route::post('/simpanPeserta','AdminController@storeGroup');

Route::post('/simpan','AdminController@storePeserta');

Route::get('/kelolakompetisi/{kelolakompetisi}','AdminController@showKelolaKompetisi');

Route::put('/simpanKompetisi/{simpanKompetisi}','AdminController@updateKompetisi');

Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login');
    Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('/dashboard', 'AdminController@index')->name('admin.index');
    Route::get('/', 'AdminController@index')->name('admin.index');
    
    Route::get('/verif_group','AdminController@showFormVerifikasi');
    Route::post('/verif_group','AdminController@verifikasi');
    Route::post('/cetak-peserta','AdminController@print')->name('admin.cetakpeserta');
    
    Route::get('/hasil_lomba','AdminController@showFormHasilLomba');
    Route::post('/hasil_lomba','AdminController@createHasilLomba');
    Route::get('/hapus_hasil_lomba/{id}','AdminController@deleteHasilLomba');
    Route::get('/edit_hasil_lomba/{id}','AdminController@editHasilLomba');
    Route::put('/update_hasil_lomba/{id}','AdminController@updateHasilLomba');
});

Route::get('/kirimEmail', 'AdminController@showKirimEmailForm');
Route::post('/kirimEmail', 'AdminController@kirimEmail');

Route::get('/berkas-web-peserta', 'AdminController@showBerkasWeb');

/*=========================================================================================
                                    JURY ROUTE
=========================================================================================*/

Route::prefix('juri')->group(function(){
    Route::get('/login', 'Auth\JuryLoginController@showLoginForm');
    Route::post('/login', 'Auth\JuryLoginController@login')->name('jury.login');
    Route::post('/logout', 'Auth\JuryLoginController@logout')->name('jury.logout');
    Route::get('/dashboard', 'JuryController@index');
    Route::get('/', 'JuryController@index')->name('jury.index');
});

Route::get('/rekap-nilai','JuryController@showRekapNilai');

Route::resource('/form-nilai','ScoreListController');

Route::get('/rekap-nilai-detail','JuryController@showFormDetailRekap');

Route::resource('/pesan','ScoreReqController');

Route::get('/juriSetting','JuryController@showFormSetting');

Route::put('/juriSetting/{juriSetting}','JuryController@updateJuri');

Route::get('/showform','JuryController@showFormDinamis');

#Route untuk lihat file terupload
Route::prefix('lihat-file-terupload-android')->group(function(){
    Route::get('/', 'AdminController@showPartisipantsUploadFileAndroid')->name('lihatfile.index');
});

Route::prefix('lihat-file-terupload-idea')->group(function(){
    Route::get('/', 'AdminController@showPartisipantsUploadFileIdea')->name('lihatfileIdea.index');
});

Route::prefix('lihat-file-terupload-inovasi')->group(function(){
    Route::get('/', 'AdminController@showPartisipantsUploadFileInovasi')->name('lihatfileInovasi.index');
});
#

Route::get('/admin/secret', function(){
    $comp = App\Competition::join('groups', 'groups.competition_id', '=', 'competitions.id')
        ->selectRaw('competitions.long_name, count(competition_id) as jml')->groupBy('competition_id', 'competitions.long_name')->get();

    $compVerifiedEmail = App\Competition::join('groups', 'groups.competition_id', '=', 'competitions.id')
        ->where('verified_email', 1)
        ->selectRaw('competitions.long_name, count(competition_id) as jml')->groupBy('competition_id', 'competitions.long_name')->get();


    $compVerifiedAll = App\Competition::join('groups', 'groups.competition_id', '=', 'competitions.id')
        ->where('verified', 1)
        ->selectRaw('competitions.long_name, count(competition_id) as jml')->groupBy('competition_id', 'competitions.long_name')->get();

    // return $compVerifiedAll;

    // return $comp;

    return view('admin.secret', compact('comp', 'compVerifiedEmail', 'compVerifiedAll'));
})->name('admin.secret');