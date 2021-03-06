<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Star extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function planets() {
        return $this->hasMany(Planet::class);
    }

    public function starSystems() {
        return $this->belongsTo(StarSystem::class);
    }
}
