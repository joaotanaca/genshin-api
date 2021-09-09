<?php

namespace App\Http\Controllers;

use App\Models\Characters;

class SeriesController extends Controller
{
    public function index()
    {
        return Characters::all();
    }
}
