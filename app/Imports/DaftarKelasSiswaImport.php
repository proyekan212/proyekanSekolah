<?php

namespace App\Imports;


use Maatwebsite\Excel\Concerns\ToModel;
use App\Model\User;
use App\Model\UserDetail;
use Illuminate\Support\Facades\Hash;

class DaftarKelasSiswaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
       return new User([
          'id'     => $row[0],
           'username'    => $row[1], 
           'password' => Hash::make($row[2]),
        ]);
   
}
}

