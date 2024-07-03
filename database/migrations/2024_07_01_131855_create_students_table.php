<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();

//            $table->unsignedBigInteger('group_id')->nullable();
            $table->index('group_id');
            $table->foreignId('group_id')->nullable()
                ->constrained()->onDelete('set null');

            $table->softDeletes();
            $table->timestamps();
        });
    }
}
