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
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // auto increment and is primary key
            $table->string('product_name')->nullable(false); // NOT NULL
            $table->integer('categoryID')->nullable(false); // NOT NULL
            $table->string('image_url')->nullable(false); // NOT NULL
            $table->string('description')->nullable(false); // NOT NULL
            $table->decimal('price', 10, 2)->nullable(false); // NOT NULL
            $table->integer('quantity')->nullable(false); // NOT NULL
            $table->boolean('isAvailable')->nullable(false); // NOT NULL
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
        // Schema::dropIfExists('products');
    }
};
