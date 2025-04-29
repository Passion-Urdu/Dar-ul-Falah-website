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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('city');
            $table->string('category_1');
            $table->string('category_2');
            $table->string('sub_category_1');
            $table->string('sub_category1_rating');
            $table->string('sub_category1_class');
            $table->string('sub_category_2');
            $table->string('sub_category2_rating');
            $table->string('sub_category2_class');
            $table->integer('mecca_nights');
            $table->integer('madina_nights');
            $table->integer('airline_ticket')->nullable();
            $table->string('sharing_rate');
            $table->string('quad_rate');
            $table->string('triple_rate');
            $table->string('double_rate');
            $table->integer('package_count');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
