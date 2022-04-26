<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        $user = "Amanda";

        return inertia('Home', [
            'user' => $user
        ]);
    }

    public function about()
    {
        return Inertia::render('About');
    }

  

 
}
