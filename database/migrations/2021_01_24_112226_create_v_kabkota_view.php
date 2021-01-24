<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateVKabkotaView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW `v_kabkota` as
            select
                substr(`administrative_area`.`area_code`,
                1,
                4) as `area_code`,
                substr(`administrative_area`.`area_code`,
                1,
                2) as `provinsi_code`,
                substr(`administrative_area`.`area_code`,
                3,
                2) as `kabupatenkota_code`,
                `administrative_area`.`area_name` as `kabupatenkota_name`
            from
                `administrative_area`
            where
                substr(`administrative_area`.`area_code`,
                3,
                2) <> 0
                and substr(`administrative_area`.`area_code`,
                5,
                6) = 0");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement("DROP VIEW v_kabkota");
    }
}
