<?php

namespace App\Exports;

use App\Model\DaftarKelas;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithMapping;

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
       	return DaftarKelas::with(['kelas.jadwal_pelajaran.absen'])
        // ->whereHas('kelas.jadwal_pelajaran', function($query) use($request) {
        //     $query->where('id', '=', $request->session()->get(''));
        // })->first()
		->where('kelas_id',$this->id)
       	->get();
       }
       public function map($data) : array {

       	$status = '';
       	$absen_at = '';
       	foreach ($data->kelas->jadwal_pelajaran[0]->absen as  $row) {
       		$status = $row->status;
       		$absen_at = $row->absen_at;
       	}
       	return [
       		$data->id,
       		$data->kelas->kelas . ' ' . $data->rombel->name,
       		$data->user_detail->name,
       		$status,
       		$absen_at,
       	] ;

       }
   }
    // public function array(): array
    // {
    //     return $this->data;
    // }