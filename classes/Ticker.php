<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class Ticker extends Model
{
   protected $fillable = ['ticker','stock_name'];
}