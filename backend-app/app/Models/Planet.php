<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function planetTypes() {
        return $this->belongsTo(PlanetType::class);
    }

    public function stars() {
        return $this->belongsTo(Star::class);
    }
}
