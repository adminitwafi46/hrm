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
        Schema::create('karyawans', function (Blueprint $table) {
            $table->id();
            //firstname
            $table->string('firstname');
            //lastname
            $table->string('lastname');
            //email
            $table->string('email');
            //gender
            $table->string('gender');
            //birthdate city
            $table->string('birthdate_city');
            //birthdate date
            $table->string('birthdate_date');
            //phone
            $table->string('phone');
            //marriage status
            $table->string('marriage_status');
            //faith
            $table->string('faith');
            //national id
            $table->string('national_id');
            //address text
            $table->text('address');
            //postcode
            $table->string('postcode');
            //domisili address
            $table->text('domisili_address');
            //blood type
            $table->string('blood_type');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karyawans');
    }
};
