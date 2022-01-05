<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class spesialis extends Model
{
    use HasFactory;

    protected $table        = "spesialis_dokter";
    protected $primaryKey   = "id_spesialis";
    public $incrementing    = true;
    public $timestamps      = false;

    protected $fillable = [
        'nama_spesialis'
    ];
}
