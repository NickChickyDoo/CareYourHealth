<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Patiant;

class Patiant extends Model
{

    protected $table = 'patiants';
    protected $primaryKey = 'no_patiant';
    public $timestamps = false;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('name', 'lastname', 'address', 'birth', 'pid', 'sex', 'line', 'patient_tel', 'contact', 'no_dispense', 'no_treatment', 'no_assign', 'no_role');

    public function Treatment()
    {
        return $this->hasOne('App\Treatment', 'no_treatment', 'no_treatment');
    }

    public function hasAssign()
    {
        return $this->hasOne('App\Assignment', 'no_assign', 'no_assign');
    }

    public function hasPatiantRole()
    {
        return $this->hasOne('App\Role', 'no_role', 'no_role');
    }

}
