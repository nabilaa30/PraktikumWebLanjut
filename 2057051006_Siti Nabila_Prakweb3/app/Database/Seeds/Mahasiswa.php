<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\i18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data_mahasiswa = [
            [
                'npm' => 'darth',
                'nama'    => 'darth@theempire.com',
                'alamat' => 'sukarame',
                'created_at' => Time::now()
            ],
            [
                'npm' => '2057051006',
                'nama'    => 'Siti Nabila',
                'alamat' => 'Serang',
                'created_at' => Time::now()
            ],
            [
                'npm' => '2017051025',
                'nama'    => 'Ilham Addawam',
                'alamat' => 'Serang',
                'created_at' => Time::now()
            ],

        ];
        foreach ($data_mahasiswa as $data) {
            // Using Query Builder
            $this->db->table('mahasiswa')->insert($data);
        }
    }
}
