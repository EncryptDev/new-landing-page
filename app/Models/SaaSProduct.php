<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaaSProduct extends Model
{
    use HasFactory;

    protected $table = 'saas_products';

    protected $fillable = [
        'name',
        'tagline',
        'logo',
        'icon',
        'status',
        'is_under_development',
        'description',
        'features',
        'active_users',
        'daily_transactions',
        'url',
        'demo_url',
        'is_active',
        'order'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'is_under_development' => 'boolean'
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('order', 'asc');
    }

    /**
     * Parse features text by newline into array
     */
    public function getFeaturesListAttribute()
    {
        if (empty($this->features)) {
            return [];
        }
        return array_filter(array_map('trim', explode("\n", $this->features)));
    }
}
