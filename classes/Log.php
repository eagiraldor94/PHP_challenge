<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
   protected $fillable = ['name','ticker','open','high','low','close'];
}