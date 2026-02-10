<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {   
        $serviceMap = [
            'MCGI' => [
                'icon' => 'fa-globe',
                'description' => 'Active participation in community outreach, spiritual development, and charitable events.'
            ],
            'Capture The Flag' => [
                'icon' => 'fa-flag',
                'description' => 'Testing system vulnerabilities and solving complex cybersecurity challenges.'
            ],
            'Projects' => [
                'icon' => 'fa-laptop-code',
                'description' => 'Building responsive, web applications.'
            ],
            'Video Editor' => [
                'icon' => 'fa-film',
                'description' => 'Crafting engaging visual stories through professional editing and motion graphics.'
            ],
        ];

        $listItems = array_keys($serviceMap);

        return view('about', compact('serviceMap', 'listItems'));
    }

}
