<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('imagem')->nullable();
            $table->string('nome_produto');
            $table->string('tipo');
            $table->decimal('preco', 9, 2);
            $table->string('quantidade')->nullable();
            
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('produtos');
    }
};
