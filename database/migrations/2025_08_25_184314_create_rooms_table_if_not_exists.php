<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        if (!Schema::hasTable('rooms')) {
            Schema::create('rooms', function (Blueprint $table) {
                $table->id();
                $table->integer('room_number')->unique();
                $table->enum('status', ['vacant', 'occupied'])->default('vacant');
                $table->string('classification');
                $table->text('description');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
