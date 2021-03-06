<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // redirect to login screen if has no auth
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $teams = \App\Team::latest()->limit(5)->get(); 
        $users = \App\User::latest()->limit(5)->get(); 
        $timeentries = \App\TimeEntry::latest()->limit(5)->get(); 
        $contentpages = \App\ContentPage::latest()->limit(5)->get(); 

        // return view('index', compact( 'teams', 'users', 'timeentries', 'contentpages' ));
        return view('index', compact( 'teams', 'users', 'timeentries', 'contentpages' ));
    }

    public function home()
    {
        
        $teams = \App\Team::latest()->limit(5)->get(); 
        $users = \App\User::latest()->limit(5)->get(); 
        $timeentries = \App\TimeEntry::latest()->limit(5)->get(); 
        $contentpages = \App\ContentPage::latest()->limit(5)->get(); 

        // return view('index', compact( 'teams', 'users', 'timeentries', 'contentpages' ));
        return view('home', compact( 'teams', 'users', 'timeentries', 'contentpages' ));
    }
}
