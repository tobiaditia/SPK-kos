<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateVKecamatanView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW `v_kecamatan` as
        select
            substr(`administrative_area`.`area_code`,
            1,
            6) as `area_code`,
            substr(`administrative_area`.`area_code`,
            1,
            2) as `provinsi_code`,
            substr(`administrative_area`.`area_code`,
            3,
            2) as `kabupatenkota_code`,
            substr(`administrative_area`.`area_code`,
            5,
            2) as `kecamatan_code`,
            `administrative_area`.`area_name` as `kecamatan_name`
        from
            `administrative_area`
        where
            substr(`administrative_area`.`area_code`,
            3,
            2) <> 0
            and substr(`administrative_area`.`area_code`,
            5,
            2) <> 0
            and substr(`administrative_area`.`area_code`,
            7,
            4) = 0");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW v_kecamatan");
    }
}
