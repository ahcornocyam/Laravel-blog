<?php

namespace Blog;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Coment extends Model
{
    //
    protected $fillable = [
    		'post_id',
    		'comment',
    		'name',
    		'email'
    ];
    
    public function post() {
    	
    	return $this->belongsTo('Blog\Post');
    }
}
