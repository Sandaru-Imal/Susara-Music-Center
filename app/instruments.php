<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instruments extends Model
{
    protected $fillable = ['instrumentId', 'instrumentName', 'description', 'imagepath'];
}
