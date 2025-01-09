<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Auth\Authenticatable;
class user extends Model implements \Illuminate\Contracts\Auth\Authenticatable
{
    //
    use Authenticatable;
    public $timestamps=false;
    protected $table="user";
    protected $guarded=[];
    protected $primaryKey="id";
}
