<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StarSystem extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function stars() {
        return $this->hasMany(Star::class);
    }

    public function planets()
  {
    return $this->hasManyThrough(Planet::class, Star::class);
  }
}

