<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TemaController extends Controller
{
    public function getTemak(){
        $data = DB::table('tema')
            ->get();
        return $data;
    }
}
