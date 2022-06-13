<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearVisibilidadSalas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visibilidad_salas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->timestamps();
        });
        if (Schema::getColumnListing('visibilidad_salas') == []) {
            $tipos = [
                ['nombre' => 'Privada'],
                ['nombre' => 'Publica'],
            ];
            DB::table('visibilidad_salas')->insert($tipos);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('VisibilidadSalas');
    }
}
