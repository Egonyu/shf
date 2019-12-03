<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocialLinksCOntroller extends Controller
{
    public function facebook()
    {
        return redirect()->away('www.twitter.com/SauzarF');
    }
}
