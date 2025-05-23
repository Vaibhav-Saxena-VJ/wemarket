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
        Schema::create('arm_blogs', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->string('title')->nullable();
            $table->string('slug_url')->nullable();
            $table->string('report_id')->nullable();
            $table->string('auther')->nullable();
            $table->string('published_on')->nullable();
            $table->longText('description')->nullable();

            $table->string('image_path')->nullable();
            $table->string('image_name')->nullable();

            $table->string('meta_title')->nullable();
            $table->string('meta_keyword')->nullable();
            $table->string('meta_description')->nullable();
            $table->longText( 'schema_markup')->nullable();
            $table->longText('og_meta')->nullable();
            $table->longText('twitter_meta')->nullable(); 
                     

            $table->string('created_ip_address')->nullable();
            $table->string('modified_ip_address')->nullable();
            $table->bigInteger('created_by')->nullable();
            $table->bigInteger('modified_by')->nullable();
            $table->enum('status', ['active', 'delete', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arm_blogs');
    }
};
