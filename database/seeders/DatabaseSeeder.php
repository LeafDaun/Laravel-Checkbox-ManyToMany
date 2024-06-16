<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use App\Models\Mahasiwa;
use App\Models\Matakuliah;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // Jurusan::create([
        //     'nama_jurusan' => 'Matematika'
        // ]);
        // Jurusan::create([
        //     'nama_jurusan' => 'IPA'
        // ]);
        // Jurusan::create([
        //     'nama_jurusan' => 'Ekonomi'
        // ]);
        // Jurusan::create([
        //     'nama_jurusan' => 'Hukum'
        // ]);
        // Mahasiwa::factory(20)->create();
        // Mahasiwa::factory()->count(20)->create();

        // Matakuliah::create([
        //     'nama_kuliah' => 'Bahasa Inggris',
        // ]);
        // Matakuliah::create([
        //     'nama_kuliah' => 'Bahasa Indonesia',
        // ]);
        // Matakuliah::create([
        //     'nama_kuliah' => 'Kalkulus',
        // ]);
        // Matakuliah::create([
        //     'nama_kuliah' => 'PPKN',
        // ]);

        Mahasiwa::find(1)->matakuliah()->detach(9);
    }
}
