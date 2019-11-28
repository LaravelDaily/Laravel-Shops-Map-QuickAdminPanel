<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');

            $table->longText('description')->nullable();

            $table->string('address')->nullable();

            $table->string('coordinates')->nullable();

            $table->boolean('active')->default(0);

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
