<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{

    protected $table = 'roles';
    public $timestamps = false;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function hasRoleUser()
    {
        return $this->hasMany('App\User', 'no_role', 'no_role');
    }

    public function hasRolePatiant()
    {
        return $this->hasMany('App\Patiant', 'no_role', 'no_role');
    }

}
