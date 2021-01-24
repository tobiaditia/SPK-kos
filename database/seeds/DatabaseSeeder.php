<?php

use App\AdministrativeArea;
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
            KosSeeder::class,
            KamarSeeder::class,
            FasilitasSeeder::class,
            AdministrativeArea::class
        ]);
    }
}
