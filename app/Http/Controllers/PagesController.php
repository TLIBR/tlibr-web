<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function faq()
    {
        return view('pages.faq');
    }

    public function privacy()
    {
        return view('pages.privacy');
    }
}