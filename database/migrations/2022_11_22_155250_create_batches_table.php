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
        Schema::create('batches', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('vertical_id')->references('id')->on('verticals')->onDelete('cascade');
            $table->foreignId('board_id')->nullable()->references('id')->on('boards')->onDelete('cascade');
            $table->foreignId('school_class_id')->nullable()->references('id')->on('school_classes')->onDelete('cascade');
            $table->foreignId('subject_id')->nullable()->references('id')->on('subjects')->onDelete('cascade');
            $table->foreignId('college_subject_id')->nullable()->references('id')->on('college_subjects')->onDelete('cascade');
            $table->foreignId('language_id')->nullable()->references('id')->on('languages')->onDelete('cascade');
            $table->foreignId('university_id')->nullable()->references('id')->on('universities')->onDelete('cascade');
            $table->json('days')->nullable();
            $table->text('start_time')->nullable();
            $table->text('end_time')->nullable();
            $table->decimal('price')->nullable();
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
        Schema::dropIfExists('batches');
    }
};
