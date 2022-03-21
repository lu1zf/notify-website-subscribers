<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteSubscribers extends Model
{
    use HasFactory;

    protected $fillable = ['website_id', 'user_id'];
}
