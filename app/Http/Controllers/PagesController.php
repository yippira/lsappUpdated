<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "This is a title for Perry Orbital!";
        return view('pages.index')->with('title',$title);
    }

    public function about(){
        $title = "About the crash";
        return view('pages.about')->with('title', $title);
    }
    public function services(){
        $title = "more services";
        $data = array(
            'title' => 'Services',
            'services' => ['Web Development', 'SEO', 'Copywriting']
        );
        return view('pages.services')->with($data);
    }
}
