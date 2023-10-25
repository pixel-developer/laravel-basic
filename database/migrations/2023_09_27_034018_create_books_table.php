<?php

use App\Models\Author;
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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            // author_id
            // $table->string('author_id');
            // $table->foreign('author_id')->references('id')->on('authors');
            $table->foreignIdFor(Author::class);
            $table->string('title');
            $table->string('image');
            $table->enum("status", ["published", "draft"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
