<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'code', 'volunteer_id'];

    public function volunteer()
    {
        return $this->belongsTo(Volunteer::class);
    }
}
