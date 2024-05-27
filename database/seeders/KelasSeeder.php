<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'nama_kelas' => 'XII-RPL1',
            'jurusan' => 'Rekayasa Perangkat Lunak'
        ];

        DB::table('t_kelas')->insert($data);

        $data = [
            'nama_kelas' => 'XII-RPL2',
            'jurusan' => 'Rekayasa Perangkat Lunak'
        ];

        DB::table('t_kelas')->insert($data);
    }
}
