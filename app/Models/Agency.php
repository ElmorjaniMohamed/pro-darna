<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Property;

class Agency extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'address',
        'zipCode',
        'phone',
        'email',
        'number_of_agent',
        'webSite',
        'user_id'
    ];

    public function properties()
    {
        return $this->hasMany(Property::class);
    }

    public function media()
    {
        return $this->hasMany(Media::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}