<?php

use App\Model\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles_name =  array('administrator', 'kepala sekolah', 'kurikulum', 'guru', 'siswa');

        foreach($roles_name as $role) {
            Role::create([
               'name_role' => $role
            ]);
        }
    }
}
