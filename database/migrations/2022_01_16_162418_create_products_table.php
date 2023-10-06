<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
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
            $table->biginteger('category_id');
            $table->string('brand_name')->nullable();
            $table->string('model_name')->nullable();
            $table->longText('description')->nullable();
            $table->string('original_price')->nullable();
            $table->tinyInteger('offer')->nullable();
            $table->biginteger('selling_price')->nullable();
            $table->string('image')->nullable();
            $table->string('quantity')->nullable();
            $table->string('status')->nullable();
            $table->tinyInteger('trending')->nullable();
            $table->string('ram')->nullable();
            $table->string('processor')->nullable();
            $table->string('storage')->nullable();
            $table->tinyInteger('type')->nullable();
            $table->string('ports')->nullable();
            $table->string('graphic')->nullable();
            $table->string('display')->nullable();
            $table->string('color')->nullable();
            $table->string('chipset')->nullable();
            $table->string('memory_slots')->nullable();
            $table->string('operating_system')->nullable();
            $table->string('other_info')->nullable();
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
        Schema::dropIfExists('products');
    }
}
