<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kelas;

class KelasSeeder extends Seeder
{

    public function run(): void{
        $data = [
            'A',
            'B',
            'c',
            'D',
        ];
        foreach($data as $kelas){
            Kelas::create([
                'nama_kelas' => Crypt::encryptString($kelas),
            ]);
        }
    }
}
