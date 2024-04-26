<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;
use App\Models\Pest;
use App\Models\Bug;
use App\Models\DetailBugs;

class PestController extends Controller
{
    public function index()
    {
        $information = Information::first();
        $pest = Pest::first();
        $bugs = Bug::where('types', 0)->get();
        return view('idn.pest.index', compact('information', 'pest', 'bugs'));
    }

    public function other()
    {
        $information = Information::first();
        $pest = Pest::first();
        $bugs = Bug::where('types', 1)->get();
        return view('idn.pest.otherpest', compact('information', 'pest', 'bugs'));
    }

    public function show($id)
    {
        $bug = Bug::findOrFail($id);
        $bug->load('detailBugs');
        $information = Information::first();
        return view('idn.pest.detailpest', compact('bug', 'information'));
    }

    public function otherpest($id)
    {
        $bug = Bug::findOrFail($id);
        $bug->load('detailBugs');
        $information = Information::first();
        return view('idn.pest.detailpest', compact('bug', 'information'));
    }
    public function index_eng()
    {
        $information = Information::first();
        $pest = Pest::first();
        $bugs = Bug::where('types', 0)->get();
        return view('eng.pest.index', compact('information', 'pest', 'bugs'));
    }

    public function other_eng()
    {
        $information = Information::first();
        $pest = Pest::first();
        $bugs = Bug::where('types', 1)->get();
        return view('eng.pest.otherpest', compact('information', 'pest', 'bugs'));
    }

    public function show_eng($id)
    {
        $bug = Bug::findOrFail($id);
        $bug->load('detailBugs');
        $information = Information::first();
        return view('eng.pest.detailpest', compact('bug', 'information'));
    }

    public function otherpest_eng($id)
    {
        $bug = Bug::findOrFail($id);
        $bug->load('detailBugs');
        $information = Information::first();
        return view('eng.pest.detailpest', compact('bug', 'information'));
    }
}
