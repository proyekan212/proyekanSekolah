<?php

namespace App\Exports;

use App\Model\DaftarKelas;
use App\Model\Absen;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithMapping;
use Session;
class AbsensiKelasExport implements FromCollection,WithMapping, WithHeadings
{
       /**
    * @return \Illuminate\Support\Collection
    */
    // protected $data;

    // public function __construct(array $data)
    // {
    //     $this->data = $data;
    // }

       protected $id;

       function __construct($id) {
       	$this->id = $id;
       // dd($this->id);

       }


       public function headings(): array
       {


       	return [ "NO"	,"KELAS"	,"NAMA SISWA"	,"STATUS"	,"ABSEN"];

       }


       public function collection()
       {
        //returns Data with User data, all user data, not restricted to start/end dates
       	// return DaftarKelas::with(['kelas.jadwal_pelajaran.absen'])
        // ->whereHas('kelas.jadwal_pelajaran', function($query) use($request) {
        //     $query->where('id', '=', $request->session()->get(''));
        // })->first()
		  // ->where('kelas_id',$this->id)
    //    	->get();

        // dd($this->id);  
       return Absen::with('kelas_mapel')->where('kelas_mapel_id',Session::get('kelas_mapel'))->get();

       }
       public function map($data) : array {
           
        // foreach ($data->kelas->jadwal_pelajaran[0]->absen as  $row) {

          // if ($row->user_detail_id == $data->user_id) {
       
       	       	return [
       		$data->id,
       		$data->kelas_mapel->kelas->kelas . ' ' . $data->kelas_mapel->kelas->rombel->name,
       		$data->user_detail->name,
          $data->status,
          $data->absen_at,
       	] ;
          // }
       // }
   }
 }
    // public function array(): array
    // {
    //     return $this->data;
    // }