<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {

            $table -> id();
            $table -> string('title', 100);
            $table -> text('description')->nullable();
            $table -> string('price');
            $table -> string('series')->nullable();
            $table -> date('sale_date');
            $table -> string('type');
            $table -> timestamps();
            $table -> softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comics');
    }
}
