<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'price',
        'description',
        'address',
        'zipCode',
        'status',
        'area',
        'nbr_of_bedroom',
        'nbr_of_bathroom',
        'nbr_of_garage',
        'agency_id',
        'property_type_id',
        'category_id',
        'image',
    ];

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

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function media()
    {
        return $this->hasMany(Media::class);
    }
}