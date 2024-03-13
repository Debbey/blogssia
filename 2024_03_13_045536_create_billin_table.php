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
        Schema::create('billin', function (Blueprint $table) {
            $table->id();
            $table->string('firstN');
            $table->string('lastN');
            $table->string('gender');
            $table->string('language');
            $table->string('email');
            $table->string('address');
            $table->string('state');
            $table->integer('zip');
            $table->string('cardtype');
            $table->timestamps();
        });
    }

    



    public function down(): void
    {
        Schema::dropIfExists('billin');
    }
};
