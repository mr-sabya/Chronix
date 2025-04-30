<?php

namespace App\Models;


use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'parent_id',
        'name',
        'slug',
        'icon',
        'image',
    ];

    // 🔁 Self-referencing: Parent Category
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    // 🔁 Self-referencing: Subcategories
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    // 🔁 Relationship to news (if using news)
    

    // 🧠 Optional: Auto-generate slug on saving
    protected static function booted()
    {
        static::saving(function ($category) {
            if (empty($category->slug)) {
                $category->slug = Str::slug($category->name);
            }
        });
    }
}
