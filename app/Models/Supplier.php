<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'contact_person',
        'email',
        'phone',
        'address',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    // Add accessor for name to use company_name
    public function getNameAttribute()
    {
        return $this->company_name;
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
