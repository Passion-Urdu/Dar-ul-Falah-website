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
        Schema::create('sub_categories', function (Blueprint $table) {
            $table->id();
            $table->string('main_title');
            $table->string('name');
            $table->string('subcategory_id');
            $table->foreignId('cate_id')->constrained('categories')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->string('rating');
            $table->string('class');
            $table->foreignId('pr_id')->constrained('prices')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->string('subcategory_image');
            $table->string('image_hash');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_categories');
    }
};
