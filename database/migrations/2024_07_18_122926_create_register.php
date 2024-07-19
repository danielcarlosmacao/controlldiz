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
        Schema::create('registers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('nasc');
            $table->string('number');
            $table->string('telephone');
            $table->enum('maritalstatus',['solterio','casado','viuvo','divorciado']);
            $table->enum('sex',['masculino','femenino','outros']);
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->enum('status',['ativo','inativo']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('register');
    }
};
