<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;

class WebController extends Controller
{
    public function showAll() {
        $res = Http::get('https://www.delfi.lv/misc/task_2020/')->json();
        $encoded = Cookie::get('article_id');
        $decoded = json_decode($encoded, true);
        return view('main', [
            'articles' => $res,
            'cookies' => $decoded ?? []
        ]);
    }
}
