<?php

namespace App\Exports;

use App\Model\MasterKejadianJurnal;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithMapping;

class KejadianJurnalExport implements FromCollection,WithMapping, WithHeadings
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
        return [ "NO"	,"WAKTU"	,"NAMA SISWA"	,"KEJADIAN / PERILAKU"	,"BUTIR SIKAP"	,"POSITIF / NEGATIF"	,"TINDAK LANJUT"];


    }


    public function collection()
    {
        //returns Data with User data, all user data, not restricted to start/end dates
        return MasterKejadianJurnal::with('siswa')->get();
    }
    public function map($data) : array {
        return [
           $data->id,
           $data->waktu,
           $data->siswa->name,
           $data->kejadian,
           $data->butir_sikap,
           $data->tindakan,
           $data->tindak_lanjut,
        ] ;

    }
}
    // public function array(): array
    // {
    //     return $this->data;
    // }