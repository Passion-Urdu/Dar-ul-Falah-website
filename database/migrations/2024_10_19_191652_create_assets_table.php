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
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->string('asset_id');
            $table->string('image');
            $table->foreignId('m_id')->constrained('menus')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->string('content_title');
            $table->string('title');
            $table->string('sub_title');
             $table->foreignId('pkg_id')->constrained('packages')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assets');
    }
};
