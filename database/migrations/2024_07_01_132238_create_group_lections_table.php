<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupLectionsTable extends Migration
{
    public function up()
    {
        Schema::create('group_lections', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('group_id')->nullable();
            $table->unsignedInteger('lection_id')->nullable();
            $table->timestamps();
        });
    }
}
