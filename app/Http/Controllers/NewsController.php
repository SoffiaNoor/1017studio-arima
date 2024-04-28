<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $information = Information::first();
        $news = News::paginate(6);
        return view('idn.news.index', compact('information', 'news'));
    }

    public function show($id)
    {
        $news = News::findOrFail($id);
        $latest_news = News::all();
        $information = Information::first();
        return view('idn.news.show', compact('news', 'information', 'latest_news'));
    }

    public function index_eng()
    {
        $information = Information::first();
        $news = News::all();
        return view('eng.news.index', compact('information', 'news'));
    }

    public function show_eng($id)
    {
        $news = News::findOrFail($id);
        $latest_news = News::all();
        $information = Information::first();
        return view('eng.news.show', compact('news', 'information', 'latest_news'));
    }
}
