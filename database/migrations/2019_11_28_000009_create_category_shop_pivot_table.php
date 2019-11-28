<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryShopPivotTable extends Migration
{
    public function up()
    {
        Schema::create('category_shop', function (Blueprint $table) {
            $table->unsignedInteger('shop_id');

            $table->foreign('shop_id', 'shop_id_fk_667152')->references('id')->on('shops')->onDelete('cascade');

            $table->unsignedInteger('category_id');

            $table->foreign('category_id', 'category_id_fk_667152')->references('id')->on('categories')->onDelete('cascade');
        });
    }
}
