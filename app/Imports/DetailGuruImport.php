<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use App\Model\User;
use App\Model\UserDetail;
use Illuminate\Support\Facades\Hash;

class DetailGuruImport implements ToModel,WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
     return new UserDetail([
       'name'    => $row[3],
       'jenis_kelamin' => $row[4],
       'tempat_lahir' => $row[5],
       'tanggal_lahir' => $row[6],
       'nisn_or_nip' => $row[7],
       'tahun_masuk' => $row[8],
       'email' => $row[9],
       // 'user_id' => $row[0],
       'role_id' => 2,
       'mapel_id' => 1,



     ]);
     
   }
    public function startRow(): int
  {
   
    return 2;

  }
}
