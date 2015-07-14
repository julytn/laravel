<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about()
    {
        $first = 'Zoe';
        $last = 'Song';

        return view('pages.about', compact('first', 'last'));
    }
}
