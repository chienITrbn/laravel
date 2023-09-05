<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Primary Key',
    // `username` varchar(40) NOT NULL,
    // `password` varchar(255) NOT NULL,
    // `first_name` varchar(255) NOT NULL,
    // `last_name` varchar(255) NOT NULL,
    // `email` varchar(255) NOT NULL,
    // `create_time` datetime DEFAULT current_timestamp(),
    // `role` bit(1) NOT NULL,
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->nullable(false);
            $table->string('password')->nullable(false);
            $table->string('email')->unique()->nullable(false);
            $table->boolean('role')->default(0);
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
