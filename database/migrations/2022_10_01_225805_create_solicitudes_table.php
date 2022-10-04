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
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('descripcion');
            $table->string('estado');
            $table->string('tecnico')->nullable();
            $table-> foreignId('tecnico_id')->nullable()->constrained()->onDelete('cascade');
            $table-> foreignId('user_id')->constrained()->onDelete('cascade');
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
        Schema::table('solicitudes',function(Blueprint $table){
            $table->dropForeign('solicitudes_tecnico_id_foreign');
            $table->dropForeign('solicitudes_user_id_foreign');
            $table->dropIfExists('solicitudes');
          });
    }
};
