<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
  public $timestamps = false;

  protected $table = "users";
  protected $primaryKey = 'id_login';
  protected $hidden = ['password'];
  protected $fillable = ['username', 'password', 'email', 'hak_akses'];
}
