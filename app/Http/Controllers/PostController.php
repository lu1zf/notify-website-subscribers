<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\WebsiteController;
use App\Models\Website;
use App\Models\Posts;

class PostController extends Controller
{
    public function store(Request $request, $websiteId)
    {
        $website = Website::findOrFail($websiteId);

        $request->query->set('website_id', $websiteId);

        return Posts::create($request->all());
    }
}
