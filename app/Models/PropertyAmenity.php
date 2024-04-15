<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyAmenity extends Model
{
    use HasFactory;

    public function properties()
    {
        return $this->belongsToMany(Property::class, 'amenity_property');
    }
}