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
        Schema::create('accounts', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_type_account')->nullable()->index('id_type_account');
            $table->string('number_account', 35);
            $table->float('balance', 10, 0)->nullable();
            $table->integer('id_client')->nullable()->index('id_client');
            $table->integer('id_city')->nullable()->index('FK_accounts_city');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
};
