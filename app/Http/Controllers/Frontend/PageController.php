<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function HomePage()
    {
        return view('pages.frontend.home-page');
    }

    public function AboutPage()
    {
        return view('pages.frontend.about-page');
    }

    public function RentalPage()
    {
        return view('pages.frontend.rental-page');
    }

    public function BlogPage()
    {
        return view('pages.frontend.blog-page');
    }

    public function ContactPage()
    {
        return view('pages.frontend.contact-page');
    }
}
