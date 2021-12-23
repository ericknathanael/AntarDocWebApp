<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{
    use HasFactory;

    protected $table        = "doctor";
    protected $primaryKey   = "doctor_id";
    public $incrementing    = true;
    public $timestamps      = true;

    protected $fillable = [
        'user_id',
        'doctor_address',
        'doctor_experience',
        'doctor_specialist',
    ];
}
