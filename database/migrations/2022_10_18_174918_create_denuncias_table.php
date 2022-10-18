<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDenunciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('denuncias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('denunciante_id')->nullable()->constrained('denunciantes');
            $table->foreignId('tipos_proceso_id')->nullable()->constrained('tipos_procesos');
            $table->date('fecha_registro')->nullable();
            $table->string('denunciado')->nullable();
            $table->text('delito')->nullable();
            $table->decimal('monto', 10, 2)->nullable();
            $table->text('archivos')->nullable();
            $table->string('estado')->nullable()->default('solicitado');
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
        Schema::dropIfExists('denuncias');
    }
}
