<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proprety extends Model
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
}