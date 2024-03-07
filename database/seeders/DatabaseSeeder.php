<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Admin User',
            'email' => 'test@example.com',
            'username' => 'admin',
            'password' => Hash::make('211234'),
        ]);

        Mahasiswa::create([
            'nim' => '1111',
            'nama' => 'Salman yuris',
            'jurusan' => 'Sistem Informasi',
            'kelamin' => 'Laki-laki',
            'universitas' => 'Dian Nuswantoro',
            'tgl_mulai' => '2024-02-20',
            'tgl_berakhir' => '2024-03-30',
            'status' => 'Diterima',
        ]); // example

    }
}
