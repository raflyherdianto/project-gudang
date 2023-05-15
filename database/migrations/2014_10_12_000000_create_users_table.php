<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pegawai');
            $table->string('nama');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('email');
            $table->string('alamat');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('no_hp');
            $table->enum('level', ['Administrator']);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
