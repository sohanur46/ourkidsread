<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index()
    {
        return view('pages.index');
    }

    public function about()
    {
        $about = true;
        return view('pages.about', compact('about'));
    }

    public function mission()
    {
        return view('pages.mission');
    }

    public function bookCollection()
    {
        return view('pages.book_collection');
    }

    public function successStories()
    {
        return view('pages.success_stories');
    }
    
    
    
    
    public function policyprivacy()
    {
        return view('pages.policy-privacy');
    }
    
     public function policysms()
    {
        return view('pages.policy-sms');
    }
    
     public function livehelp()
    {
        return view('pages.live-help');
    }
    
    
    
    
    

    public function sponsors()
    {
        return view('pages.sponsors');
    }

    public function faq()
    {
        return view('pages.faq');
    }

    public function donateNow()
    {
        return view('pages.donate_now');
    }

    public function contactUs()
    {
        return view('pages.contact_us');
    }
    
    public function volunteer()
    {
        return view('pages.volunteer');
    }

    public function schoolPartnerships()
    {
        return view('pages.school_partnerships');
    }

    public function readingBuddies()
    {
        return view('pages.reading_buddies');
    }

    public function nationalBookDonationEvents()
    {
        return view('pages.national_book_donation_events');
    }
}
