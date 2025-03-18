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
        Schema::create('hackathon', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->date('date');
            $table->foreignId('theme')->constrained('theme');
            $table->foreignId('rules')->constrained('rule');
            $table->foreignId('equipe')->constrained('equipe');
            $table->foreignId('organisateur')->constrained('utilisateur');
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hackathon');
    }
};
