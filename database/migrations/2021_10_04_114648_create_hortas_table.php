<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHortasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hortas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo')->nullable();
            $table->integer('terreno')->nullable();
            $table->integer('salas')->nullable();
            $table->integer('banheiros')->nullable();
            $table->integer('dormitorios')->nullable();
            $table->integer('garagens')->nullable();
            $table->text('descricao')->nullable();
            $table->decimal('preco', 12,2)->nullable();

            $table->foreignId('escola_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('tipo_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('finalidade_id')->nullable()->constrained()->onDelete('cascade');


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
        Schema::dropIfExists('hortas');
    }
}
