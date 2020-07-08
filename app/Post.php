<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
  public function tags(){
     return $this->belongsToMany(Tag::class);
  }
    public function addComment($body,$fname,$lname){
        $this->comments()->create(compact('body','fname','lname'));
//        Comment::create([
//            'body' =>$body,
//            'post_id'=> $this->id,
//            'name' => $username
//
//
//        ]);
    }
}
