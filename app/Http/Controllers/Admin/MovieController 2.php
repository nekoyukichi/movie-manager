<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    // 一覧ページ
    public function index()
    {
        // moviesテーブルの全データを取得
        $movies = Movie::all();
        // Blade へ渡す
        return view('admin.movies.index', compact('movies'));
    }

    // 1レコード分を表示するページ
    public function show($id)
    {
        // URLパラメータから受け取ったidで検索
        $movie = Movie::findOrFail($id);

        return view('admin.movies.show', compact('movie'));
    }
}

