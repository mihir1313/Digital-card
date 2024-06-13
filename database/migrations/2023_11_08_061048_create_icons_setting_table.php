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
        Schema::create('icons_setting', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('phone')->nullable();
            $table->string('phone_status')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('whatsapp_status')->nullable();
            $table->string('location')->nullable();
            $table->string('location_status')->nullable();
            $table->string('mail')->nullable();
            $table->string('mail_status')->nullable();
            $table->string('website')->nullable();
            $table->string('website_status')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('icons_setting');
    }
};
