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
            $table->string('thumbnail');
            $table->string('title');
            $table->longText('article_body');
            $table->date("created_date")->default(Date::now());
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
