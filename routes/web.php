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

use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', 'Auth\AuthController@loginView')->name('login');
Route::post('/', 'Auth\AuthController@login')->name('loginPost');

// Route::group(['middleware' => ['auth', 'addmenuroles', 'addmenuroles2']], function () {

Route::group(['middleware' => ['auth']], function () {

    //LOGOUT
    Route::get('/logout', 'Auth\AuthController@logout')->name('logout');
    Route::get('/edit_password/{id}', 'Profile\ProfileController@edit_password');
    Route::post('/update_password_user/{id}', 'Profile\ProfileController@update_password_user');
 
    //SIDEBAR
    // Route::get('*', 'Sidebar/SidebarController@index');

    //DASHBOARD GURU
    Route::get('/dashboard', 'Dashboard\DashboardController@index');
    Route::post('/dashboard', 'Dashboard\DashboardController@store');
    Route::get('/dashboard/get_kelas', 'Dashboard\DashboardController@getKelas');
    Route::get('/dashboard/get_mapels', 'Dashboard\DashboardController@getMapels');

    //TEACHER

    //MATAPEAJARAN
    Route::get('/matapelajaran', 'Teacher\MapelController@mapelGet');
    Route::post('/matapelajaran/add', 'Teacher\MapelController@addEMapel')->name('add_matapelajaran');
    Route::post('/matapelajaran/delete', 'Teacher\MapelController@deleteMapel')->name('delete_matapelajaran');
    Route::get('/matapelajaran/ajax', 'Teacher\MapelController@getDataMapel');
    //MATERI GURU
    Route::get('/materi', 'Teacher\MateriController@materiGet');
    //ABSEN GURU
    Route::resource('/kelas/absen_guru', 'Teacher\AbsenController');

    //MASUK KELAS
    Route::get('kelas', 'Kelas\KelasController@index');
    Route::post('kelas', 'Kelas\KelasController@store');   

     //VIDEO CONFERENCE
    Route::get('/kelas/video_conference', 'Kelas\VideoConferenceController@VideoConferenceGet');
    //ABSENSI KELAS
    Route::resource('/kelas/absensi_kelas', 'Kelas\AbsensiKelasController');
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
    

    //cetak_excel
    // Route::resource('/daftar_siswa_kelas_excel', 'Kelas\CetakExcelController@daftar_siswa_kelas');
    // Route::resource('/daftar_siswa_kelas_excel_import', 'Kelas\CetakExcelController@daftar_siswa_kelas_excel_import');
    // Route::resource('/kejadian_jurnal_excel', 'Kelas\CetakExcelController@kejadian_jurnal');

    //CBT
    // Route::get('/kelas/cbt', 'Kelas\CbtController@CbtGet');
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
    // Route::get('/profile', 'Profile\ProfileController@ProfileGet');
    Route::get('/edit_profile/{id}', 'Profile\ProfileController@ProfileGet');


    // settings kelas
    Route::resource('/kelas/pengaturan_kelas', 'Kelas\PengaturanKelasController');
    //Monitor Aktivitas Siswa
    Route::get('/kelas/monitor_aktifitas', 'Kelas\AbsensiKelasController@monitor_aktifitas_siswa');


    // Raport 
    Route::resource('kelas/rekap_raport', 'Kelas\RekapRaportController');

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
    Route::resource('/tahun_akademik', 'Admin\TahunAkademikController');
    Route::resource('/data_kelas', 'Admin\DataKelasController');
    Route::get('/data_kelas/edit/{id}', 'Admin\DataKelasController@edit');
    Route::post('/data_kelas/store_siswa', 'Admin\DataKelasController@storeSiswaKelas');
    // Data Master Mata Pelajaran
    Route::resource('/data_master_mapel', 'Admin\MasterMapelController');


    // Student
    Route::resource('/kelas_mapel', 'Student\KelasMapelController');
    Route::post('/kelas_mapel/absens', 'Student\KelasMapelController@absen');
    Route::resource('/materi_kelas_student', 'Student\MateriKelasStudentController');
    //tugas siswa
    Route::resource('tugas_siswa_keterampilan', 'Kelas\TugasSiswaKeterampilanController');
    Route::resource('tugas_siswa_pengetahuan', 'Kelas\TugasSiswaPengetahuanController');


    // penilaian siswa

    Route::resource('penilaian_siswa_keterampilan', 'Kelas\PenilaianSiswaKeterampilanController');
    Route::resource('penilaian_siswa_pengetahuan', 'Kelas\PenilaianSiswaPengetahuanController');
    
    //Download Excel
    Route::get('daftar_siswa_kelas_excel', 'Kelas\ExportExcelController@daftar_siswa_kelas');
    Route::post('daftar_siswa_kelas_excel_import', 'Kelas\ImportExcelController@daftar_siswa_kelas_import');
    Route::post('daftar_guru_kelas_excel_import', 'Kelas\ImportExcelController@daftar_guru_kelas_excel_import');    
    // Route::get('format_daftar_user_guru', 'Kelas\ImportExcelController@format_daftar_user_guru');    
    // Route::get('format_daftar_user_siswa', 'Kelas\ImportExcelController@format_daftar_user_siswa');    
    Route::get('tambah_jadwal_import', 'Kelas\ImportExcelController@tambah_jadwal_import');
    Route::get('kejadian_jurnal_excel/', 'Kelas\ExportExcelController@kejadian_jurnal');
    Route::get('rekap_absen_excel/', 'Kelas\ExportExcelController@rekap_absen');
    
    //RPP (UPLOAD FILE)
    Route::get('/RPP_Admin', 'Kelas\RppController@rpp_admin');

    
});



//register
Route::get('/register', function () {
    return view('pages.auth.register');
});
Route::post('/register/create', 'Auth\AuthController@register');
