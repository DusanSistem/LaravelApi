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
        Schema::create('equipments', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->unsignedBigInteger('pc_id');
            $table->foreign('pc_id')->references('id')->on('pcs');
            $table->unsignedBigInteger('mouse_id');
            $table->foreign('mouse_id')->references('id')->on('mouses');
            $table->unsignedBigInteger('keyboard_id');
            $table->foreign('keyboard_id')->references('id')->on('keyboards');
            $table->unsignedBigInteger('employee_id');
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipments');
    }
};
