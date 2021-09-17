<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSchool extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('School', function (Blueprint $table) {
            $table->id();
            $table->string('schoolName', 100)->nullable;
            $table->string('schoolAddress', 100)->nullable;
            $table->string('principalName', 100)->nullable;
            $table->date('Date')->nullable;

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
        Schema::dropIfExists('School');
    }
}
