<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisPengiriman extends Model
{
    protected $table = 'jenis_pengiriman';
    protected $primaryKey = 'jenis_pengiriman_id';
    public $timestamps = false;
}
