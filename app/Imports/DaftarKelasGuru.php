<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Model\User;
use App\Model\UserDetail;
use Illuminate\Support\Facades\Hash;

class DaftarKelasGuru implements ToModel ,WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
     return new User([
     
        'username'    => $row[1], 
      'password' => Hash::make($row[2]),

    ]);

   }
   public function startRow(): int
   {

    return 2;

  }
}
