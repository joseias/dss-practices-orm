<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('phones', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->unique();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // drop the keys
        Schema::table('phones', function (Blueprint $table) {
            $table->dropForeign('phones_user_id_foreign');
        });

        // drop the actual columns
        Schema::table('phones', function (Blueprint $table) {
            $table->dropColumn('user_id');
        });
    }
};
