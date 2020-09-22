<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rumah extends Model
{
    protected $table = "rumah";
    protected $fillable = ['id_projek','no_rumah','status_rumah','klaim'];
}