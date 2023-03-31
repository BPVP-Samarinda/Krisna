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
        //
        Schema::create('customer',function ($table){
            $table->id();
            $table->string('nama')->nullable();
            $table->text('alamat')->nullable();
            $table->date('tanggal_lahir')->defautlt(0);
            $table->string('jenis_kelamin')->nullable();
            $table->double('telpon')->nullable();
            $table->srting('status')->nullable();
            $table->timestamps();

         });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('customer');
    }
};
