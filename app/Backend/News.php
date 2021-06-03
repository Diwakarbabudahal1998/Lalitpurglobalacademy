<?php

namespace App\Backend;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable=[
        'news_title','news_category','news_description','news_image'
    ];
}
