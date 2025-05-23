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
        Schema::create('arm_service_we_market_client_support', function (Blueprint $table) {
            $table->id();
            $table->string('banner_heading')->nullable();
            $table->longText('description')->nullable();
            $table->string('banner_image_path')->nullable();
            $table->string('banner_image_name')->nullable();

            $table->string('meta_title')->nullable();
            $table->string('meta_keyword')->nullable();
            $table->string('meta_description')->nullable();
            $table->longText( 'schema_markup')->nullable();
            $table->longText('og_meta')->nullable();
            $table->longText('twitter_meta')->nullable(); 

            $table->enum('status', ['active', 'delete', 'inactive'])->default('active');
            $table->string('created_ip_address')->nullable();
            $table->string('modified_ip_address')->nullable();
            $table->bigInteger('created_by')->nullable();
            $table->bigInteger('modified_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arm_service_we_market_client_support');
    }
};
