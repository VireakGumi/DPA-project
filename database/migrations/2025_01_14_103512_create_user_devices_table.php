<?php

use App\Models\UserDevice;
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
        Schema::create('user_devices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('token_id');
            $table->string('device_id')->nullable();
            $table->string('device_name')->nullable();
            $table->string('device_type')->default(UserDevice::DEVICE_TYPE_BROWSER)->comment('1 for browser, 2 for mobile, 3 for unknown');
            $table->string('browser')->nullable();
            $table->string('os')->nullable();
            $table->string('ip')->nullable();
            $table->string('location')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('token_id')->references('id')->on('personal_access_tokens')->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_devices');
    }
};
