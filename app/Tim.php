<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tim extends Model
{
    protected $table = "tim";
    protected $fillable = ['foto','nama','jabatan'];
}