<?php

namespace Blog;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
    		'title',
    		'content',
    ];
    
    public function comments(){
    	return $this->hasMany( 'Blog\Coment' );
    }
    
    public function tags() {
    	
    	return $this->belongsToMany( 'Blog\Tag','posts_tags' );
    }
}
