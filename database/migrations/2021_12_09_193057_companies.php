<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Companies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name')->required();
            $table->string('email')->required();
            $table->string('desc')->nullable();
            $table->string('address')->nullable();
            $table->string('img')->nullable();
            $table->string('phone')->nullable();
            $table->string('RCS')->nullable();        // RCS registre du commerce et des sociétés

            $table->string('TVA')->default(0);        // TVA taxe sur la valeur ajoutée
            $table->string('NTVA')->default(0);     //  Numéro TVA Intracommunautaire	
            $table->string('country')->number();   // Company country 

            $table->string('note')->nullable();
            $table->foreignId('user_id')->constrained();
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

        Schema::drop('companies');
    }
}
