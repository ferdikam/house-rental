<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logements', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('commune_id');
            $table->unsignedInteger('type_logement_id');

            $table->string('name');
            $table->integer('superficie');

            $table->timestamps();
            $table->softDeletes();

            $table->index('commune_id');
            $table->index('type_logement_id');
            $table->index('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logements');
    }
}
