<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
   /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
   protected $fillable = [
       'name', 'username', 'email', 'password'
   ];
   /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
   protected $hidden = [
       'password'
   ];
   /*
   * Get Logs of User
   *
   */
   public function logs()
   {
       return $this->hasMany('Log');
   }
 }