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
        Schema::create('ppdbs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('ppdb_id')->nullable();
            $table->string('name');
            $table->string('email')->unique();
            $table->integer('nisn');
            $table->string('asalSekolah');
            $table->string('jenisKelamin');
            $table->string('nomor');
            $table->string('noIbu');
            $table->string('noAyah');
            $table->enum('role', ['user', 'admin']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ppdbs');
    }
};
