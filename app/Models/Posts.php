<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\EmailController;

class Posts extends Model
{
    use HasFactory;
    protected $fillable = ['website_id', 'title', 'description'];

    public static function boot()
    {
        parent::boot();

        self::created(function($model){
            EmailController::send($model['id']);
        });
    }
}
