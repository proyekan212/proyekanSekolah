<?php

namespace App\Exports;

use App\Model\DaftarKelas;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithMapping;
class DaftarSiswaKelasExport implements FromCollection,WithMapping, WithHeadings
{
       /**
    * @return \Illuminate\Support\Collection
    */
    // protected $data;

    // public function __construct(array $data)
    // {
    //     $this->data = $data;
    // }
    public function headings(): array
    {
        return ["NO" , "NAMA"   , "NISP / NIP" , "NAMA SISWA" , "JENIS KELAMIN"  , "TEMPAT/TANGGAL LAHIR"  ,  "KELAS"];
    }


    public function collection()
    {
        //returns Data with User data, all user data, not restricted to start/end dates
        return DaftarKelas::with('user_detail')->get();
    }
    public function map($data) : array {
        return [
            $data->id,
         $data->user_detail->photo,
          $data->user_detail->nisn_or_nip,
           $data->user_detail->name,
           $data->user_detail->jenis_kelamin,
           $data->user_detail->tempat_lahir . ' - ' . $data->user_detail->tanggal_lahir,
           $data->kelas->kelas . ' ' . $data->rombel->name,
        ] ;
 
 
    }
    // public function array(): array
    // {
    //     return $this->data;
    // }
}
