<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;  

class Users extends Authenticatable
{
    use HasFactory;
    protected $table = 'users';
    public $timestamps = true;
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'email',
        'username',
        'fullname',
        'password',
        'level'
    ];
    protected function getNameAttribute(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => ucfirst($value),
        );
    }
}