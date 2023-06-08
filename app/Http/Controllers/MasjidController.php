<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasjidController extends Controller
{
    public function listMasjid(){
        return view ('blog.indexList',[
            'title' => 'Daftar masjid',
        ]);
    }
    public function profil(){
        return view ('blog.index',[
            'title' => 'profil',
        ]);
    }
}
