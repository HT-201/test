<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // UPメソッドはDBに追加する項目を指定する
    public function up(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->string('user_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    // DOWNメソッドは取り消したい項目を追加する
    public function down(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            //
        });
    }
};
