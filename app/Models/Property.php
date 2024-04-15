<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    public function agency()
    {
        return $this->belongsTo(Agency::class);
    }

    public function propertyType()
    {
        return $this->belongsTo(PropertyType::class);
    }

    public function amenities()
    {
        return $this->belongsToMany(PropertyAmenity::class, 'amenity_property');
    }
}