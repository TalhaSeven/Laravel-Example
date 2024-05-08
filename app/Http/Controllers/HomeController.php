<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $courses = [
            [
                'name' => 'web development',
                'description' => 'web development course',
                'status' => 'active'
            ],
            [
                'name' => 'web design',
                'description' => 'web design course',
                'status'=> 'active'
            ],
            [
                'name' => 'laravel',
                'description' => 'laravel course',
                'status'=> 'inactive'
            ]
        ];

        return view('home', compact('courses'));
    }
}
