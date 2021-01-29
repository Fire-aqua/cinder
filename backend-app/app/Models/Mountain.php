<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mountain extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public $fillable = ['name', 'height', 'is_icy'];
}
