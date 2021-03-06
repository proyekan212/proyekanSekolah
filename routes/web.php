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

    //LOGOUT
    Route::get('/logout', 'Auth\AuthController@logout')->name('logout');

    //SIDEBAR
    // Route::get('*', 'Sidebar/SidebarController@index');

    //DASHBOARD GURU
    Route::get('/dashboard', 'Dashboard\DashboardController@index');

    //TEACHER

    //MATAPEAJARAN
    Route::get('/matapelajaran', 'Teacher\MapelController@mapelGet');
    Route::post('/matapelajaran/add', 'Teacher\MapelController@addEMapel')->name('add_matapelajaran');
    Route::post('/matapelajaran/delete', 'Teacher\MapelController@deleteMapel')->name('delete_matapelajaran');
    Route::get('/matapelajaran/ajax', 'Teacher\MapelController@getDataMapel');
    //MATERI GURU
    Route::get('/materi', 'Teacher\MateriController@materiGet');
    //ABSEN GURU
    Route::get('/absen', 'Teacher\AbsenController@absenGet');

    //MASUK KELAS
    Route::get('kelas', 'Kelas\KelasController@index');
    Route::post('kelas', 'Kelas\KelasController@store');   

     //VIDEO CONFERENCE
    Route::get('/kelas/video_conference', 'Kelas\VideoConferenceController@VideoConferenceGet');
    //ABSENSI KELAS
    Route::get('/kelas/absensi_kelas', 'Kelas\AbsensiKelasController@AbsensiKelasGet');
    //KOMPETENSI DASAR
    Route::resource('/kelas/kompetensi_dasar', 'Kelas\KompetensiDasarController');
    //RPP (UPLOAD FILE)
    Route::resource('/kelas/rpp', 'Kelas\RppController');
    //KEJADIAN JURNAL
    Route::resource('/kelas/kejadian_jurnal', 'Kelas\KejadianJurnalController');
    Route::get('/kelas/kejadian_jurnal/edit/{id}', 'Kelas\KejadianJurnalController@edit');
    Route::post('/kelas/kejadian_jurnal/update/{id}', 'Kelas\KejadianJurnalController@update');
    //MATERI BAHAN AJAR
    Route::resource('/kelas/materi_bahan_ajar', 'Kelas\MateriBahanAjarController');
    // Route::get('/kelas/materi_bahan_ajar/edit/{id}', 'Kelas\MateriBahanAjarController@edit');
    // Route::post('/kelas/materi_bahan_ajar/update/{id}', 'Kelas\MateriBahanAjarController@update');
    //DAFTAR SISWA KELAS
    Route::resource('/kelas/daftar_siswa_kelas', 'Kelas\DaftarSiswaKelasController');
    //CBT
    Route::get('/kelas/cbt', 'Kelas\CbtController@CbtGet');
    //PENILAIAN PENGETAHUAN (KD3)
    Route::resource('/kelas/penilaian_pengetahuan', 'Kelas\PenilaianPengetahuanController');
    Route::get('/kelas/penilaian_pengetahuan/edit/{id}', 'Kelas\PenilaianPengetahuanController@edit');
    Route::post('/kelas/penilaian_pengetahuan/update/{id}', 'Kelas\PenilaianPengetahuanController@update');
    //PENILAIAN PENGETAHUAN (KD4)  
    Route::resource('/kelas/penilaian_keterampilan', 'Kelas\PenilaianKeterampilanController');
    Route::get('/kelas/penilaian_keterampilan/edit/{id}', 'Kelas\PenilaianKeterampilanController@edit');
    Route::post('/kelas/penilaian_keterampilan/update/{id}', 'Kelas\PenilaianKeterampilanController@update');
    //PENILAIAN SEMESTER
    Route::resource('/kelas/penilaian_semester', 'Kelas\PenilaianSemesterController');
    //JURNAL GURU
    Route::resource('/kelas/jurnal_guru', 'Kelas\JurnalGuruController');
    Route::get('/kelas/jurnal_guru/edit/{id}', 'Kelas\JurnalGuruController@edit');
    Route::post('/kelas/jurnal_guru/update/{id}', 'Kelas\JurnalGuruController@update');

    //PROFILE
    Route::get('/profile', 'Profile\ProfileController@ProfileGet');

    //Admnistrator
    //SettingSemester
    Route::resource('/Setting_Semester', 'Admin\SettingSemesterController');
    //SettingKelasAjar
    Route::resource('/Setting_Kelas_Ajar', 'Admin\SettingKelasAjarController');
    //DataMasterKelas
    Route::resource('/Data_Master_Kelas', 'Admin\DataMasterKelasController');
    //DataMasterJurusan
    Route::resource('/Data_Master_Jurusan', 'Admin\DataMasterJurusanController');
    //DataMasterSiswa
    Route::resource('/Data_Master_Siswa', 'Admin\DataMasterSiswaController');
    //DataMasterGuru
    Route::resource('/Data_Master_Guru', 'Admin\DataMasterGuruController');
    //JadwalPelajaran
    Route::resource('/Jadwal_Pelajaran', 'Admin\JadwalPelajaranController');
    //KompetensiInti
    Route::resource('/Kompetensi_Inti', 'Admin\KompetensiIntiController');
    //KompetensiDasar
    Route::resource('/Kompetensi_Dasar', 'Admin\KompetensiDasarController');
    //MonitoringAktivitasGuru
    Route::resource('/Monitoring_Aktivitas_Guru', 'Admin\MonitoringAktivitasGuruController');
    //MonitoringAktivitasSiswa
    Route::resource('/Monitoring_Aktivitas_Siswa', 'Admin\MonitoringAktivitasSiswaController');
     //MasterKKM
    Route::resource('/Master_KKM', 'Admin\MasterKKMController');
     //LaporanKehadiranSiswa
    Route::resource('/Laporan_Kehadian_Siswa', 'Admin\LaporanKehadiranSiswaController');
     //LaporanKehadiranGuru
    Route::resource('/Laporan_Kehadian_Guru', 'Admin\LaporanKehadiranGuruController');
     //LaporanCetakPenilaian
    Route::resource('/Laporan_Cetak_Penilaian', 'Admin\LaporanCetakPenilaianController');
     //TahunAkademik
    Route::resource('/Tahun_Akademik', 'Admin\TahunAkademikController');
    
    // Data Master Mata Pelajaran
    Route::resource('/data_master_mapel', 'Admin\MasterMapelController');

    


});

//register
Route::get('/register', function () {
    return view('pages.auth.register');
});
Route::post('/register/create', 'Auth\AuthController@register');
