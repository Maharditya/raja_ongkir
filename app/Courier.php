<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courier extends Model
{
    protected $table = 'courier';
    protected $primaryKey = 'courier_id';
    public $timestamps = false;
}
