<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;


class MovieController extends Controller
{
    public function index()
    {
        //  moviesテーブルのデータを全件取得
        $movies = Movie::all();

        //  取得したデータをビューに渡す
        return view('movies.index', compact('movies'));
    }
}
