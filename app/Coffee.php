<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coffee extends Model
{
    protected $fillable = ['imagePath', 'title', 'description', 'price'];
}
