<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTvaTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tva_types', function (Blueprint $table) {
            $table->smallInteger('tva_id');
            $table->primary('tva_id');
            $table->string('description');
            $table->string('deadline')->nullable();
            $table->boolean('recurring')->default(false);
            $table->string('frequency')->nullable();
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
        Schema::dropIfExists('tva_types');
    }
}
