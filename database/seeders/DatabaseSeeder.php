<?php

namespace Database\Seeders;

use App\Models\Download;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            EscolaSeeder::class,
            DownloadSeeder::class,

        ]);
    }
}
