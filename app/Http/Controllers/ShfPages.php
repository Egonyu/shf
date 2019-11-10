<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShfPages extends Controller
{
    public function youthempowerment()
    {
        return view('pages.youthempowerment');
    }

    public function ourTeam()
    {
        return view('pages.team.ourteam');
    }
}
