<?php

// database/migrations/[timestamp]_create_tb_dosen_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbDosenTable extends Migration
{
    public function up()
    {
        Schema::create('tb_dosen', function (Blueprint $table) {
            $table->id('id_dosen');
            $table->string('nip', 20);
            $table->string('nama_dosen', 50);
            $table->string('foto_dosen', 50)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_dosen');
    }
}

