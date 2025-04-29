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
        Schema::create('wadges', function (Blueprint $table) {
            $table->id();
             $table->string('wadge_id');
             $table->integer('visa_charges');
             $table->integer('conversion_rate');
             $table->integer('package_profit1');
             $table->integer('package_profit2');
             $table->integer('package_profit3');
             $table->integer('package_profit4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wadges');
    }
};
