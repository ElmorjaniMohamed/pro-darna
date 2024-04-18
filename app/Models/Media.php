<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $fillable = [
        'file_name',
        'file_type',
        'file_path',
        'property_id',
    ];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }

    public function agency()
    {
        return $this->belongsTo(Agency::class);
    }
}