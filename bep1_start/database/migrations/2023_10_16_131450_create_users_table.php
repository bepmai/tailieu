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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('uid');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('gender');
            $table->string('numberPhone', 10);
            $table->unsignedInteger('id_Class');
            $table->foreign('id_Class')->references('idClass')->on('pro_classes')->onDelete('cascade');
            $table->string('password');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};