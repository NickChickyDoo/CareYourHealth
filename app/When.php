<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class When extends Model
{

    protected $table = 'whens';
    protected $primaryKey = 'no_when';
    public $timestamps = false;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('name');

}
