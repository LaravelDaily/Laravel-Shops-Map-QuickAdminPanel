<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToShopsTable extends Migration
{
    public function up()
    {
        Schema::table('shops', function (Blueprint $table) {
            $table->unsignedInteger('created_by_id')->nullable();

            $table->foreign('created_by_id', 'created_by_fk_667277')->references('id')->on('users');
        });
    }
}
