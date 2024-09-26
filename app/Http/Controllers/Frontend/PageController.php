<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function HomePage()
    {
        return view('pages.home-page');
    }

    public function AboutPage()
    {
        return view('pages.about-page');
    }

    public function RentalPage()
    {
        return view('pages.rental-page');
    }

    public function ContactPage()
    {
        return view('pages.contact-page');
    }
}
