<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $serviceMap = [
            'Student Tracker' => [
                'icon' => 'fa-graduation-cap', 
                'description' => 'All-in-one academic web app featuring automated reviewer generation, activity tracking, and smart schedule management.'
            ],
            'ClassSched' => [
                'icon' => 'fa-calendar-days', 
                'description' => 'A secure, centralized solution that digitizes school logistics to eliminate paper-based class scheduling.'
            ],
        ];

        $listItems = array_keys($serviceMap);

        return view('project', compact('serviceMap', 'listItems'));
    }
}