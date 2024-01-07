<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('short');
            $table->text('text');
            $table->text('image')->nullable(); // Assuming image can be nullable
            $table->text('code')->nullable();
            $table->timestamps();
        });
        // Schema::table('projects', function (Blueprint $table){
        //     $table->text('code')->nullable();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}

