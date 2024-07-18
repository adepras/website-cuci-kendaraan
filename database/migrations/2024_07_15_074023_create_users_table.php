<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone_number');
            $table->string('email')->unique();
            $table->text('address')->nullable();
            $table->string('password');
            $table->enum('gender', ['male','female'])->nullable();
            $table->enum('role', ['user', 'admin'])->default('user');
            $table->string('vehicle_brand');
            $table->string('vehicle_type');
            $table->string('license_plate');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
};
