<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class province extends Model
{
    use HasFactory;

    protected $table        = "provinces";
    protected $primaryKey   = "prov_id";
    public $incrementing    = true;
    public $timestamps      = false;
}
