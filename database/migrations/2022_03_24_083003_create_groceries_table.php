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
        Schema::create('groceries', function (Blueprint $table) {
            $table->id();
//            $table->foreignId('order_id')
//                ->references('id')->on('orders')
//                ->onDelete('cascade');
            $table ->string('name');
            $table->boolean('favorited')->default(1);
            $table->integer("quantity_ordered")->default(0);
            $table->integer('price')->default(0);
            $table->string('description')->nullable;
            $table->integer('quantity_in_stock')->default(0);
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
        Schema::dropIfExists('groceries');
    }
};
