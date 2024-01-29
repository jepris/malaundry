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
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id'|'unique'|'DESC');
            $table->enum('paketkuota', ['KUOTA CUCI', 'KUOTA SETRIKA', 'KUOTA CUCI SETRIKA']);
            $table->integer('berat'|'require');
            $table->bigInteger('harga'|"require");
            $table->enum('cabang', ['MLPTI Tangerang', 'MLPTI Bekasi']);
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
        Schema::dropIfExists('customers');
    }
};
