<?php

namespace App\Http\Controllers;

use App\Calendar;
use Illuminate\Http\Request;

class CallendarController extends Controller
{

    public function index()
    {
        return view('calendar.main');
    }

}
