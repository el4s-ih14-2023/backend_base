<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pilabs', function (Blueprint $table) {
            $table->id();
            $table->longText('parts_name'); #部品名
            $table->double('Upper_limit'); #上限
            $table->double('Lower_limit'); #下限
            $table->double('ohm'); #抵抗値
            $table->longText('imgPath'); #画像パス
            $table->timestamps(); #作成日時、更新日時
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pilabs');
    }
};
