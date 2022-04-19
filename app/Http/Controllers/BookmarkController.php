<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;

class BookmarkController extends Controller
{
    public function getBookmarks() {
        $res = Http::get('https://www.delfi.lv/misc/task_2020/')->json();
        $cookie = Cookie::get('article_id');
        $decoded = json_decode($cookie, true);
        return view('bookmarks', [
            'ids' => $decoded ?? [],
            'articles' => $res
        ]);
    }
    public function makeBookmark() {
        $decoded = json_decode(Cookie::get('article_id'), true);
        $decoded[] = (int)request()->get('id');
        $res = Cookie::make('article_id', json_encode($decoded), 10);
//        session()->flash('success', 'You Bookmarked An Article');
        return redirect('/')->withCookie($res);
    }
    public function deleteBookmark() {
        $decoded = json_decode(Cookie::get('article_id'), true);
        if (in_array(request()->get('id'), $decoded)) {
            $key = array_search(request()->get('id'), $decoded);
            unset($decoded[$key]);
        }
        $res = Cookie::make('article_id', json_encode($decoded), 10);
//        session()->flash('success', 'Bookmark deleted');
        return redirect('/bookmarks')->withCookie($res);
    }
}
