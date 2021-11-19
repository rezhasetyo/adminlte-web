<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->integer('umur');
            $table->text('bio');
            $table->text('alamat');
            $table->timestamps();
            $table->unsignedBigInteger('user_id');     
            $table->foreign('user_id')->references('id')->on('users');      // bisa menggunakan php artisan migrate:refresh

            // Menambahkan Table --> php artisan make add_user_id to profiles
            // Taruh foreign key di tabel add_user_id_to_profiles
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()  // UNTUK UNDO
    {
        Schema::dropIfExists('profiles');
    }
}
