<?php

use App\Models\Receptek;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('receptek', function (Blueprint $table) {
            $table->id();
            $table->string("nev");
            $table->foreignId("kat_id")->references("id")->on("kategoria");
            $table->string("kep_eleresi_ut");
            $table->string("leiras");
            $table->timestamps();
        });

        Receptek::create(["nev"=>"Somlói", "kat_id" => "3", "kep_eleresi_ut" => "somlói", "leiras" =>"somlói"]);
        Receptek::create(["nev"=>"Lasagne", "kat_id" => "1", "kep_eleresi_ut" => "lasagne", "leiras" =>"lasagne"]);
        Receptek::create(["nev"=>"Borsó leves", "kat_id" => "2", "kep_eleresi_ut" => "borsó leves", "leiras" =>"borsó leves"]);
        Receptek::create(["nev"=>"Cézár saláta", "kat_id" => "4", "kep_eleresi_ut" => "cézár saláta", "leiras" =>"cézár saláta"]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('receptek');
    }
};
