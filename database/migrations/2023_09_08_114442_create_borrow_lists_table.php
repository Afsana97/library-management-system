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
        Schema::create('borrow_lists', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('student_id');
            $table->string('category_name');
            $table->tinyInteger('book_id');
            $table->string('book_name');
            $table->string('author_name');
            $table->tinyInteger('status')->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('borrow_lists');
    }
};
