<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biens', function (Blueprint $table) {
            $table->id();
            $table->float('MontantCaution');
            $table->float('loyerMensuel');
            $table->string('adresse');
            $table->foreignId('garniture_id');
            $table->foreignId('quartier_id');
            $table->foreignId('type_id');
            $table->foreignId('statu_id');
            $table->foreignId('user_id');
            $table->string('etat')->default('active');
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
        Schema::dropIfExists('biens');
    }
}
