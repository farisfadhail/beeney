<?php

use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();

            // Article =  user_id, thumbnail, title, article_body, bookmark, created_date, vote_like
            $table->foreignId('user_id')->constrained();
            $table->string('title')->unique();
            $table->longText('article_body');
            $table->string('slug')->unique();
            $table->bigInteger("watch")->default(0);
            //$table->bigInteger('vote_like')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
