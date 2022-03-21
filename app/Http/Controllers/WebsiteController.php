<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function show($id)
    {
        return Website::find($id);
    }
}
