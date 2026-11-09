<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    /**
     * Display the main landing page for KBIHU Multazam Jadid At Thariq.
     */
    public function index()
    {
        $kbihu = config('kbihu');

        return view('landing', compact('kbihu'));
    }
}
