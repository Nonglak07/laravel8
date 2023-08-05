<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNonglakTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nonglak', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->integer('number')->nullable();
            $table->float('total')->nullable();
            $table->string('country')->nullable();
            $table->date('date')->nullable();
            $table->text('name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nonglak');
    }
}
