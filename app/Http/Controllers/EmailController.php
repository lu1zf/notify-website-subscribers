<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\User;
use App\Models\WebsiteSubscribers;
use App\Mail\NotifyWebsiteSubscribers;
use Illuminate\Support\Facades\Mail;


class EmailController extends Controller
{
    public function send($postId)
    {
        $post = Posts::find($postId);
        $websiteId = $post['website_id'];

        $subscribers = WebsiteSubscribers::select("user_id")->where('website_id', '=', $websiteId)->get();

        foreach ($subscribers as $subscriber) {
            $user = User::select("email")->where('id', '=', $subscriber->user_id)->first();

            Mail::to($user->email)->send(new NotifyWebsiteSubscribers($post));
        }

    }
}
