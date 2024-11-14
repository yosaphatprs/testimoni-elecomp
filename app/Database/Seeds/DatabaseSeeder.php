<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Jalankan seeder Perusahaan
        $this->call('PerusahaanSeeder');
        
        // Jalankan seeder Progress
        $this->call('ProgressSeeder');
    }
}
