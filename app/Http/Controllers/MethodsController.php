<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fumigation;
use App\Models\TermiteBaiting;
use App\Models\GeneralPest;
use App\Models\Information;

class MethodsController extends Controller
{
    public function fumigation()
    {
        $information = Information::first();
        $fumigation = Fumigation::first();

        return view('idn.methods.fumigation', compact('information', 'fumigation'));
    }


    public function generalpest()
    {
        $information = Information::first();
        $generalpest = GeneralPest::first();

        return view('idn.methods.generalpest', compact('information', 'generalpest'));
    }


    public function termitebaiting()
    {
        $information = Information::first();
        $termitebaiting = TermiteBaiting::first();

        return view('idn.methods.termitebaiting', compact('information', 'termitebaiting'));
    }

    public function fumigation_eng()
    {
        $information = Information::first();
        $fumigation = Fumigation::first();

        return view('eng.methods.fumigation', compact('information', 'fumigation'));
    }


    public function generalpest_eng()
    {
        $information = Information::first();
        $generalpest = GeneralPest::first();

        return view('eng.methods.generalpest', compact('information', 'generalpest'));
    }


    public function termitebaiting_eng()
    {
        $information = Information::first();
        $termitebaiting = TermiteBaiting::first();

        return view('eng.methods.termitebaiting', compact('information', 'termitebaiting'));
    }
}
