<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function landing()
    {

        $page_name = 'Websites für kleine Unternehmen';        
        $index = 'landing';

        return view('welcome', compact('page_name', 'index'));
    }
}
