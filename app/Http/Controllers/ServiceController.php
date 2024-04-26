<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;
use App\Models\Commercial;
use App\Models\Disinfection;
use App\Models\Residential;
use App\Models\Factory;
use App\Models\Cleaning;

class ServiceController extends Controller
{
    public function commercial()
    {
        $information = Information::first();
        $commercial = Commercial::first();

        return view('idn.service.commercial', compact('information', 'commercial'));
    }

    public function residential()
    {
        $information = Information::first();
        $residential = Residential::first();

        return view('idn.service.residential', compact('information', 'residential'));
    }

    public function industrial()
    {
        $information = Information::first();
        $factory = Factory::first();

        return view('idn.service.industrial', compact('information', 'factory'));
    }

    public function disinfection(){
        $information = Information::first();
        $disinfection = Disinfection::first();

        return view('idn.service.disinfection', compact('information', 'disinfection'));
    }

    public function cleaning(){
        $information = Information::first();
        $cleaning = Cleaning::first();

        return view('idn.service.cleaning', compact('information', 'cleaning'));
    }

    public function commercial_eng()
    {
        $information = Information::first();
        $commercial = Commercial::first();

        return view('eng.service.commercial', compact('information', 'commercial'));
    }

    public function residential_eng()
    {
        $information = Information::first();
        $residential = Residential::first();

        return view('eng.service.residential', compact('information', 'residential'));
    }

    public function industrial_eng()
    {
        $information = Information::first();
        $factory = Factory::first();

        return view('eng.service.industrial', compact('information', 'factory'));
    }

    public function disinfection_eng(){
        $information = Information::first();
        $disinfection = Disinfection::first();

        return view('eng.service.disinfection', compact('information', 'disinfection'));
    }

    public function cleaning_eng(){
        $information = Information::first();
        $cleaning = Cleaning::first();

        return view('eng.service.cleaning', compact('information', 'cleaning'));
    }
}
