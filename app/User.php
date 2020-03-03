<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
    protected $primaryKey ='no_user';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('name', 'lastname', 'position', 'email', 'password', 'is_admin', 'no_assign');
    protected $hidden = array('password', 'rememberToken');

    public function hasUserRole()
    {
        return $this->belongsTo('App\Role', 'no_role', 'no_role');
    }

}
