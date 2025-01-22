<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //
    public $timestamps=false;
    protected $table="product";
    protected $guarded=[];
    protected $primaryKey="id";
}
