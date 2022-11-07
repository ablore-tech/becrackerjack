<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->text('name')->nullable();
            $table->text('email')->nullable();
            $table->bigInteger('number')->nullable();
            $table->boolean('is_parent')->nullable();
            $table->foreignId('vertical_id')->nullable()->references('id')->on('verticals')->onDelete('cascade');
            $table->foreignId('college_subject_id')->nullable()->references('id')->on('college_subjects')->onDelete('cascade');
            $table->foreignId('language_id')->nullable()->references('id')->on('languages')->onDelete('cascade');
            $table->foreignId('board_id')->nullable()->references('id')->on('boards')->onDelete('cascade');
            $table->foreignId('subject_id')->nullable()->references('id')->on('subjects')->onDelete('cascade');
            $table->foreignId('school_class_id')->nullable()->references('id')->on('school_classes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('leads');
    }
};
