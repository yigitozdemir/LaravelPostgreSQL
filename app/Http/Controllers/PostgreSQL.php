<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostgreSQL extends Controller
{
    public function version(){
        $version = DB::select('SELECT VERSION()');
        return response()->json(array(
            "Version" => $version[0]
        ), 200);
    }

    public function queryHistory(){
        $history = DB::select('SELECT * FROM query_history');
        return response()->json(array(
            "Version" => $history
        ), 200);
    }
}