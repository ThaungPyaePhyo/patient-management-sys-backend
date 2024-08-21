<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'code', 'password'];

    public function patients()
    {
        return $this->hasMany(Patient::class);
    }
    
}
