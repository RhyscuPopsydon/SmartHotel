<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('user_id'); // ✅ primary key
            $table->string('name', 100);
            $table->string('email', 100)->unique();
            $table->string('contact_number', 20);
            $table->string('password', 255);
            $table->enum('role', ['guest', 'receptionist', 'admin'])->default('guest');
            $table->timestamp('date_created')->useCurrent();
            $table->timestamp('date_updated')->useCurrent()->useCurrentOnUpdate();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
