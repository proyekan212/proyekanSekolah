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

Route::get('/', 'Auth\AuthController@loginView')->name('login');
Route::post('/', 'Auth\AuthController@login')->name('loginPost');

// Route::group(['middleware' => ['auth', 'addmenuroles', 'addmenuroles2']], function () {
Route::group(['middleware' => ['auth']], function () {
    Route::get('/logout', 'Auth\AuthController@logout')->name('logout');
    Route::get('*', 'Sidebar/SidebarController@index');
    Route::get('/dashboard', 'Dashboard\DashboardController@index');

    //TEACHER
    Route::get('/matapelajaran', 'Teacher\MapelController@mapelGet');
    Route::post('/matapelajaran/add', 'Teacher\MapelController@addEMapel')->name('add_matapelajaran');
    Route::post('/matapelajaran/delete', 'Teacher\MapelController@deleteMapel')->name('delete_matapelajaran');
    Route::get('/matapelajaran/ajax', 'Teacher\MapelController@getDataMapel');
    Route::get('/materi', 'Teacher\MateriController@materiGet');
    Route::get('/absen', 'Teacher\AbsenController@absenGet');

    //MASUK KELAS
    Route::get('/kelas', 'Kelas\KelasController@KelasGet');
    Route::get('/kelas/video_conference', 'Kelas\VideoConferenceController@VideoConferenceGet');
    Route::get('/kelas/absensi_kelas', 'Kelas\AbsensiKelasController@AbsensiKelasGet');
    Route::resource('/kelas/kompetensi_dasar', 'Kelas\KompetensiDasarController');
    Route::get('/kelas/rpp', 'Kelas\RppController@RppGet');
    Route::resource('/kelas/kejadian_jurnal', 'Kelas\KejadianJurnalController');
    Route::get('/kelas/kejadian_jurnal/edit/{id}', 'Kelas\KejadianJurnalController@edit');
    Route::post('/kelas/kejadian_jurnal/update/{id}', 'Kelas\KejadianJurnalController@store');
    Route::get('/kelas/materi_bahan_ajar', 'Kelas\MateriBahanAjarController@MateriBahanAjarGet');
    Route::resource('/kelas/daftar_siswa_kelas', 'Kelas\DaftarSiswaKelasController');
    Route::get('/kelas/cbt', 'Kelas\CbtController@CbtGet');
    Route::resource('/kelas/penilaian_pengetahuan', 'Kelas\PenilaianPengetahuanController');
    Route::resource('/kelas/penilaian_keterampilan', 'Kelas\PenilaianKeterampilanController');
    Route::resource('/kelas/penilaian_semester', 'Kelas\PenilaianSemesterController');
    Route::resource('/kelas/jurnal_guru', 'Kelas\JurnalGuruController');


    //PROFILE
    Route::get('/profile', 'Profile\ProfileController@ProfileGet');
});

//register
Route::get('/register', function () {
    return view('pages.auth.register');
});

Route::post('/register/create', 'Auth\AuthController@register');
