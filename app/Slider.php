<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = ['title','desc','img','link_to_post'];
   	protected $hidden=[
   	'remember_token',];
}
