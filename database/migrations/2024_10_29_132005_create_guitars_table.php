<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/* "title" => "Fender Stratocaster",
                    "description" => "Una delle chitarre più iconiche di sempre, utilizzata da artisti come Jimi Hendrix e Eric Clapton. Perfetta per rock, blues e pop.",
                    "thumb" => "https://example.com/images/fender_stratocaster.jpg",
                    "price" => "$1,200",
                    "series" => "Stratocaster",
                    "release_date" => "1954-06-01",
                    "type" => "electric",
                    "genre" => "Rock",
                    "artist" => "Jimi Hendrix",*/
return new class extends Migration
{
    /**
     * Run the migrations.
     */

   
    public function up(): void
    {
        Schema::create('guitars', function (Blueprint $table) {
            $table->id();

            $table->string("title")->nullable();
            $table->text("description")->nullable();
            $table->text("thumb")->nullable();
            $table->decimal("price",8 , 2)->nullable();
            $table->string("series")->nullable();
            $table->date("release_date")->nullable();
            $table->string("type")->nullable();
            $table->string("genre")->nullable();
            $table->string("artist")->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guitars');
    }
};
