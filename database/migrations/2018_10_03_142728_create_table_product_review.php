<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProductReview extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_review', function (Blueprint $table){
            $table->increments('id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->string('title');
            $table->text('description');
            $table->date('reviewPlaced');
            $table->boolean('recommend');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productReviews');
    }
}
