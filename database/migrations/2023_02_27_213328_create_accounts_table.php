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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('birthday');
            $table->integer('phone');
            $table->integer('national_id');
            $table->integer('passport_id');
            $table->string('nationality')->nullable();
            $table->string('country');
            $table->string('city');
            $table->string('social_condition');
            $table->string('educational_level');
            $table->string('status_of_account');
            $table->string('password')->nullable();
            $table->double('balans')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
