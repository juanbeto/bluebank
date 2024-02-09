<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('movements', function (Blueprint $table) {
            $table->foreign(['id_city'], 'FK_movements_city')->references(['id'])->on('citys');
            $table->foreign(['id_account'], 'movements_ibfk_2')->references(['id'])->on('accounts');
            $table->foreign(['id_type_movement'], 'movements_ibfk_1')->references(['id'])->on('type_movements');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('movements', function (Blueprint $table) {
            $table->dropForeign('FK_movements_city');
            $table->dropForeign('movements_ibfk_2');
            $table->dropForeign('movements_ibfk_1');
        });
    }
};
