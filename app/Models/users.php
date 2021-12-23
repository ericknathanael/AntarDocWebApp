<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;

    protected $table        = "users";
    protected $primaryKey   = "user_id";
    public $incrementing    = true;
    public $timestamps      = true;

    protected $fillable = [
        'user_username',
        'user_password',
        'user_nama_lengkap',
        'user_email',
        'status_user',
        'saldo_user',
        'user_phone_number',
        'user_photo'
    ];
}
