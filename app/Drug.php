<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Drug extends Model
{

    protected $table = 'drugs';
    protected $primaryKey = 'no_drug';
    public $timestamps = false;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('name');

}
