<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index(){
        $data = [
            'fname' => 'John',
            'lname' => 'Doe'
        ];

        return Inertia::render('dashboard/index', $data);
    }
}
