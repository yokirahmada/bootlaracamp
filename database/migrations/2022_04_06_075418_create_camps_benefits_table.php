<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampsBenefitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camps_benefits', function (Blueprint $table) {
            $table->id();

            //menyesuikan table yang akan dituju untuk membuat relasi #cara 1
            $table->bigInteger('camp_id')->unsigned();

            // #cara 2 digunakan bila ada kasus 2 relasi lebih enak makai yang ini
            //$table->foreignId('camp_id')->constrained();

            $table->string('name');
            $table->timestamps();

            //method pertama untuk membuat relasi antar table
            $table->foreign('camp_id')->references('id')->on('camps')->onDelete('cascade');
            
            //Selesai buat migrasi langsung buat model buat apa saja field nantinya yang bisa di isi
            //Jangan lupa kalau ada soft deletes ditambahkan di model
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('camps_benefits');
    }
}
