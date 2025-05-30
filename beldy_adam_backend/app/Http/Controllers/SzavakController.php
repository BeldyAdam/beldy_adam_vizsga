<?php

namespace App\Http\Controllers;

use App\Models\szavak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SzavakController extends Controller
{
        public function getSzavak(){
        $data = DB::table('szavak')
        ->get();
        return $data;
    }

/*     public function getSzavakByTema($temaId){
        $data = DB::table('szavak')
        ->where('temaId', $temaId)
        ->get();
        return $data;
    } */

    public function getSzavakByTema(){
        $szavak = szavak::with('tema')
            ->get()
            ->groupBy('temaId');

            return $szavak;
    }
}
