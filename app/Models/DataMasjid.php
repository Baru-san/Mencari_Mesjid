<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataMasjid extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function KajianMasjid(){
        return $this->hasMany(KajianMasjid::class);
    }
    public function KegiatanMasjid(){
        return $this->hasMany(KegiatanMasjid::class);
    }
    public function ShalatKhusus(){
        return $this->hasMany(ShalatKhusus::class);
    }
    public function ZiswafMasjid(){
        return $this->hasMany(ZiswafMasjid::class);
    }
}
