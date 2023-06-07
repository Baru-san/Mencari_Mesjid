<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KajianMasjid extends Model
{
    use HasFactory;
    public function DataMasjid(){
        return $this->belongsTo(DataMasjid::class);
    }
}
