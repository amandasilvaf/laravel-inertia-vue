<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        $user = "Geovani";

        return Inertia::render('Home', [
            'user' => $user
        ]);
    }
}
