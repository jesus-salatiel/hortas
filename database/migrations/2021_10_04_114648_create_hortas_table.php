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
            $table->string('nome_horta')->nullable();
            $table->string('foto')->nullable();
            $table->text('descricao')->nullable();

            $table->foreignId('escola_id')->nullable()->constrained()->onDelete('cascade');

            $table->timestamps();
            $table->softDeletes();
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
