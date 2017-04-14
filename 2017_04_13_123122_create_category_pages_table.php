<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_pages', function (Blueprint $table) {
            $table->integer('categorypages_id');
            $table->foreign('categorypages_id')->references('id')->on('page_categories')->onDelete('cascade'); / usuwanie połączonych danych
            $table->integer('pages_id');
            $table->foreign('pages_id')->references('id')->on('pages')->onDelete('cascade'); / usuwanie połączonych danych
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
        Schema::dropIfExists('category_page');
    }
}
