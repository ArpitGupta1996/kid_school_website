<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function about()
    {
        return view('about-us');
    }

    public function class()
    {
        return view('classes');
    }

    public function schoolfacility()
    {
        return view('facility');
    }

    public function popularteacher()
    {
        return view('popular-teacher');
    }

    public function becometeacher()
    {
        return view('become-teacher');
    }

    public function appointment()
    {
        return view('appointment');
    }

    public function testimonial(){
        return view('testimonial');
    }

    public function contact(){
        return view('contact');
    }
}
