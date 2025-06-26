<?php

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
        Schema::create('presupuestps', function (Blueprint $table) {
            $table->id();
                $table->string('nombrePresupuesto');
    $table->unsignedBigInteger('idUnidad')->nullable();
            $table->timestamps();

            $table->foreign('idUnidad')->references('id')->on('unidads')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presupuestps');
    }
};
