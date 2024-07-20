<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    public function property()
    {
        return $this->belongsTo(Property::class);
    }

    public function variants()
    {
        return $this->belongsToMany(Variant::class);
    }
}
