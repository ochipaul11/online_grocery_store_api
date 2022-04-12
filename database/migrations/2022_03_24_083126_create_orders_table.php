<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalogues', function (Blueprint $table) {
            $table->id();
            $table->foreignId('grocery_id')
                ->references('id')->on('groceries')
                ->onDelete('cascade');
            $table->foreignId('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->boolean('ordered')->default(1);
            $table->timestamps();
        });


        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('grocery_id')
            // ->constrained('groceries');
            //  $table->unsignedBigInteger('grocery_id');
            $table->foreignId('grocery_id')
                ->references('id')->on('groceries')
                ->onDelete('cascade');
            $table->foreignId('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->integer('quantity');
            $table->integer('total_price');

            $table->timestamps();
        });
        //     Schema::table('posts', function (Blueprint $table) {
        //         $table->foreignId('grocery_id')
        //   ->constrained('groceries');
        //     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
