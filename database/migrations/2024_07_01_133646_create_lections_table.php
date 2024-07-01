<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLectionsTable extends Migration
{
    public function up()
    {
        Schema::create('lections', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->softDeletes();
            $table->timestamps();
        });
    }
}
