<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemsilcisTable extends Migration
{

    public function up()
    {
        Schema::create('temsilci', function (Blueprint $table) {
            $table->id();
            $table->string('kurum')->nullable();
            $table->string('baskakurum')->nullable()->nullable();
            $table->string('resmiad')->nullable();
            $table->string('nasilhaber')->nullable();
            $table->string('okuladres')->nullable();
            $table->string('il')->nullable();
            $table->string('ilce')->nullable();
            $table->string('website')->nullable();
            $table->string('kurumtelefon')->nullable();
            $table->string('kurumemail')->nullable();
            $table->string('sosyalmedya')->nullable();
            $table->string('adsoyad')->nullable();
            $table->string('gorev')->nullable();
            $table->string('email')->nullable();
            $table->string('telefon')->nullable();
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('temsilci');
    }
}
