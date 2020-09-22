<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spektek extends Model
{
    protected $table = "spektek";
    protected $fillable = ['id_projek','pekerjaan','bahan'];
}