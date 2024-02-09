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
        Schema::table('accounts', function (Blueprint $table) {
            $table->foreign(['id_type_account'], 'accounts_ibfk_1')->references(['id'])->on('type_accounts');
            $table->foreign(['id_client'], 'accounts_ibfk_2')->references(['id'])->on('clients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('accounts', function (Blueprint $table) {
            $table->dropForeign('accounts_ibfk_1');
            $table->dropForeign('accounts_ibfk_2');
        });
    }
};
