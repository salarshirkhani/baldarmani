<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'explain',
        'content',
        'writer',
        'pic',
        'file',
    ];

    protected $table = 'posts';

    public function keywords() {
        return $this->belongsToMany('App\Keyword', 'service_keyword_relation', 'post_id', 'keyword_id')->withTimestamps();
    }

    public function postcategory() {
        return $this->belongsTo('App\postcategory', 'category_id');
    }
}
