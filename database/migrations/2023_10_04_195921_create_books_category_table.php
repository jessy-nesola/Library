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
        Schema::create('books_category', function (Blueprint $table) {
            $table->id();

            // creo colonne con chiavi esterne
            $table->unsignedBigInteger('book_id');
            $table->unsignedBigInteger('category_id');

            // relazioni
            $table->foreign('book_id')
                ->references('id')
                ->on('books'); // crea elementi nella struttura
            $table->foreign('category_id')
                ->references('id')
                ->on('categories');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    // public function down(): void
    // {
    //    // Schema::dropIfExists('books_category');

    //     $table->dropForeign(['author_id']);
    //     $table->dropColumn(['author_id']);
    // }

    public function down(): void
    {
        Schema::table('books_category', function (Blueprint $table) {
            $table->dropForeign(['book_id', 'category_id']);
            $table->dropColumn(['book_id', 'category_id']);
        });
    }
};
