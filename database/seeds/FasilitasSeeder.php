<?php

use App\Fasilitas;
use Illuminate\Database\Seeder;

class FasilitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fasilitas::insert([
            ['nama' => 'AC'],
            ['nama' => 'Lemari'],
            ['nama' => 'Sofa'],
            ['nama' => 'Mesin Cuci'],
            ['nama' => 'Kipas Angin'],
            ['nama' => 'Kamar Mandi'],
            ['nama' => 'Meja'],
            ['nama' => 'Internet'],
            ['nama' => 'TV'],
            ['nama' => 'Teras'],

        ]);
    }
}
