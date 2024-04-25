<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'phone_number', 'email', 'message'];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}