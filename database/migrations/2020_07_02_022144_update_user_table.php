<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('fullname'); // 氏名追加
            $table->string('phone'); // 電話番号追加
            //
        });
    }

    /**
     * Reverse the migrations.
     *　戻す処理
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            // $table->dropColumn('fullname');
            // $table->dropColumn('phone');  
        });
    }
}
