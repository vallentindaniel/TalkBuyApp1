<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admin_id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->json('about')->nullable();
            $table->json('img')->nullable();
            $table->string('path', 200);
            $table->float('price', 8, 2);
            $table->float('discount', 8, 2)->nullable();
            $table->integer('quantity');
            $table->timestamps();
            $table->dateTime('starts_at', $precision = 0)->nullable();
            $table->dateTime('ends_at', $precision = 0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
