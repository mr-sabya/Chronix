<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        // Branding
        'site_title',
        'tagline',
        'logo',
        'dark_logo',
        'favicon',

        // Theme options
        'theme',
        'header',
        'footer',

        // Contact
        'email',
        'phone',
        'address',
        'map_embed_url',

        // Social Media
        'facebook',
        'twitter',
        'instagram',
        'linkedin',
        'youtube',

        // SEO & Meta
        'meta_title',
        'meta_description',
        'meta_keywords',
        'meta_image',

        // Site Behavior
        'maintenance_mode',
        'maintenance_message',
        'enable_registration',

        // Analytics and Scripts
        'google_analytics',
        'custom_header_script',
        'custom_footer_script',

        // Custom Styles
        'custom_css',
        'custom_admin_css',

        // Timezone
        'timezone',
    ];
}
