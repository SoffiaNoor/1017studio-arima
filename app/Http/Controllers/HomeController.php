<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Information;
use App\Models\Slider;
use App\Models\Commercial;
use App\Models\Factory;
use App\Models\Disinfection;
use App\Models\Residential;
use Illuminate\Support\Facades\Mail;
use App\Models\PestManagement;
use App\Models\PestManagementImage;
use App\Mail\ContactMail;
use App\Mail\TestEmail;
use App\Models\News;

class HomeController extends Controller
{
    public function index()
    {
        $slider = Slider::all();
        $information = Information::first();
        $commercial = Commercial::first();
        $residential = Residential::first();
        $factory = Factory::first();
        $disinfection = Disinfection::first();
        $latest_news = News::all();
        $pestManagement = PestManagement::all();

        return view('idn.index', compact('information', 'slider', 'commercial', 'residential', 'factory', 'disinfection', 'latest_news', 'pestManagement'));
    }

    public function index_eng()
    {
        $slider = Slider::all();
        $information = Information::first();
        $commercial = Commercial::first();
        $residential = Residential::first();
        $factory = Factory::first();
        $disinfection = Disinfection::first();
        $latest_news = News::all();
        $pestManagement = PestManagement::all();

        return view('eng.index', compact('information', 'slider', 'commercial', 'residential', 'factory', 'disinfection', 'latest_news', 'pestManagement'));
    }
}
