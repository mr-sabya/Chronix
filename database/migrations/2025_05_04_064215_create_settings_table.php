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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            // Branding
            $table->string('site_title')->default('Chronix');
            $table->string('tagline')->nullable();
            $table->string('logo')->nullable();
            $table->string('dark_logo')->nullable();
            $table->string('favicon')->nullable();

            // Theme options
            $table->integer('theme')->default(1);
            $table->integer('header')->default(1);
            $table->integer('footer')->default(1);

            // Contact Information
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('map_embed_url')->nullable();

            // Social Media Links
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('youtube')->nullable();

            // SEO & Meta
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('meta_image')->nullable();

            // Site behavior
            $table->boolean('maintenance_mode')->default(false);
            $table->text('maintenance_message')->nullable();
            $table->boolean('enable_registration')->default(true);

            // Analytics and Scripts
            $table->text('google_analytics')->nullable();
            $table->text('custom_header_script')->nullable();
            $table->text('custom_footer_script')->nullable();

            // 🔧 Custom Styles
            $table->text('custom_css')->nullable();
            $table->text('custom_admin_css')->nullable();

            // ⏱ Timezone
            $table->string('timezone')->default('UTC');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
