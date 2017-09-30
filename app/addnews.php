<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class addnews extends Model
{
  protected $fillable = ['title', 'desc', 'img'];

    protected $hidden = [
        'remember_token',
    ];
}
