<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Wrapper extends Controller
{
    public function characters()
    {
        $json = Http::get('http://genshinlist.com/api/characters')->json();
        return response()->json($json);
    }
    public function weapons()
    {
        $json = Http::get('http://genshinlist.com/api/weapons')->json();
        return response()->json($json);
    }
    public function artifacts()
    {
        $json = Http::get('http://genshinlist.com/api/artifacts')->json();
        return response()->json($json);
    }
}
