<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Assignment extends Model
{

    protected $table = 'assigments';
    protected $primaryKey = 'no_assign';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('date', 'place', 'assignFor','comment', 'no_patiant', 'no_user');

    public function assignPatiant()
    {
        return $this->belongsTo('App\Patiant', 'no_patiant', 'no_patiant');
    }

    public function assignProvider()
    {
        return $this->belongsTo('App\User', 'no_user', 'no_user');
    }

}
