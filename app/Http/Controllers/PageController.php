<?php

namespace App\Http\Controllers;

use App\Models\Workout;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view ('index');
    }

    public function workout(Workout $workout)
    {
        return view ('workout', compact('workout'));
    }
}
