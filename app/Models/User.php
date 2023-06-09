<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name', // Add 'name' to the fillable attributes
        'email',
        'password',
        'role',
        'alamat',
        'No_Hp',
        'profile_image',
    ];


    public function DataMasjid(){
        return $this->hasOne(DataMasjid::class);
    }
}
