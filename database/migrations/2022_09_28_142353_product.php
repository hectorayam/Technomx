<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->decimal('price');
            $table->mediumText('description')->nullable();
            $table->mediumText('specification')->nullable();
            $table->mediumText('keyword')->nullable();
            $table->tinyInteger('status')->default('0');
            $table->string('image')->nullable();
            $table->unsignedBigInteger('subcategory_id')->nullable();
            $table->foreign('subcategory_id')->references('id')->on('subcategories')->onDelete('set null');
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
        //
    }
};
