<?php namespace TGL\Http\Controllers;

class PagesController extends Controller
{
    public function getHome()
    {
        return view('pages.home');
    }

    public function getContact()
    {
        return view('pages.contact');
    }

    public function getHowItWorks()
    {
        return view('pages.how-it-works');
    }
}