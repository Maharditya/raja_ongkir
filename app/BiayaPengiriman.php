<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BiayaPengiriman extends Model
{
    protected $table = 'biaya';
    protected $primaryKey = 'biaya_id';
    public $timestamps = false;
}
