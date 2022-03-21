<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WebsiteSubscribers;
use App\Models\Website;
use App\Models\Users;


class WebsiteSubscriberController extends Controller
{
    public function store(Request $request, $websiteId, $userId)
    {
        $website = Website::findOrFail($websiteId);
        $user = Website::findOrFail($userId);

        $request->query->set('website_id', $websiteId);
        $request->query->set('user_id', $userId);

        return WebsiteSubscribers::create($request->all());
    }
}
