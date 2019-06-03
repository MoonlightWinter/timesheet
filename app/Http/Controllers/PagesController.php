<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome(){
        $data = array(
            'title' => 'Welcome to Timesheet System',
            'prototypes' => ['Prototype 1']
        );
        
        return view('welcome')->with($data);
    }
    public function timesheet(){
        return view('pages.timesheet');
    }
}

/*
passing array
$data = array(
    'title' => 'Services',
    'services' => ['Web Design','Programing']
);
return view()->with($data);

@if(count()services > 0)
    <ul>
        @foreach($services as $service)
        <li>{{$service}}
        @endforeach
    </ul>
    
 */