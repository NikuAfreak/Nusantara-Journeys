<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'destination',
        'description',
        'price',
        'duration_days',
        'max_persons',
        'image_main',
        'gallery_images',
        'is_featured',
        'rating',
        'package_type'
    ];

    protected $casts = [
        'gallery_images' => 'array'
    ];

    // Scope for 3-day packages
    public function scopeThreeDay($query)
    {
        return $query->where('package_type', '3-day');
    }

    // Scope for 7-day packages
    public function scopeSevenDay($query)
    {
        return $query->where('package_type', '7-day');
    }

    // Format price with RM prefix
    public function getFormattedPriceAttribute()
    {
        return 'RM' . number_format($this->price, 2);
    }
}
