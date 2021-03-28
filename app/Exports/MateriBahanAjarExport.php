<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromArray;

class MateriBahanAjarExport implements FromArray, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }
    public function headings(): array
    {
        return ["LINK","MATERI", "HAPUS", "RATING" , "PENGIRIM" , "KELAS"];
    }
    public function array(): array
    {
        return $this->data;
    }
}