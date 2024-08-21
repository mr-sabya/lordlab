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
        Schema::create('fact_sections', function (Blueprint $table) {
            $table->id();
            $table->string('sub_heading');
            $table->string('heading');
            $table->string('text');

            $table->integer('counter_1');
            $table->string('counter_1_title');
            $table->string('counter_1_text');

            $table->integer('counter_2');
            $table->string('counter_2_title');
            $table->string('counter_2_text');

            $table->integer('counter_3');
            $table->string('counter_3_title');
            $table->string('counter_3_text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fact_sections');
    }
};
