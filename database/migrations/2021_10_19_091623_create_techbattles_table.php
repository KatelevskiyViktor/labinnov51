<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechbattlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('techbattles', function (Blueprint $table) {
            $table->id();
            $table->string('author');
            $table->string('title');
            $table->string('img');
            $table->text('about_content');
            $table->text('our_partners');
            $table->text('question');
            $table->text('meth_recom');
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
        Schema::dropIfExists('techbattles');
    }
}
