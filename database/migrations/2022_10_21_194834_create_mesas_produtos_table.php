<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('mesas_produtos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mesa_id');
            $table->unsignedBigInteger('produto_id');
            
            
            $table->timestamps();
        });

        Schema::table('mesas_produtos', function (Blueprint $table) {
            
            
            $table->foreign('mesa_id')->references('id')->on('mesas');
            $table->foreign('produto_id')->references('id')->on('produtos');
            
            
        });
    }

    public function down()
    {

        Schema::table('mesas_produtos', function (Blueprint $table) {
            
            
            $table->dropForeign('mesas_produtos_produto_id_foreign');
            $table->dropForeign('mesas_produtos_mesa_id_foreign');

        });


        Schema::dropIfExists('mesas_produtos');
    }
};
