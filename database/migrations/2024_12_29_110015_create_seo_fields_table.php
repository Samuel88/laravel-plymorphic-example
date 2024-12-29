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
        Schema::create('seo_fields', function (Blueprint $table) {
            $table->id();
            $table->string('meta_title');
            $table->integer('seo_fieldable_id')->nullable(false);
            $table->string('seo_fieldable_type')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seo_fields');
    }
};
