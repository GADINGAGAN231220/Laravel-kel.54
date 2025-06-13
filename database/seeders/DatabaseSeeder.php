<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            DivisiSeeder::class,
            ShiftSeeder::class,
            VendorSeeder::class,
            KonfigurasiSistemSeeder::class,
            RoleSeeder::class, // <-- PASTIKAN BARIS INI AKTIF (HAPUS //)
            PenggunaSeeder::class,
        ]);
    }
}