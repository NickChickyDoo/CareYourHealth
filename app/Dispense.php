<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dispense extends Model
{

    protected $table = 'dispense';
    protected $primaryKey = 'no_dispense';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('date', 'amount', 'no_drug', 'indicator', 'take', 'daily', 'no_when', 'no_time', 'only_when', 'no_condition', 'no_patiant', 'no_user');

    public function Drug()
    {
        return $this->hasOne('App\Drug', 'no_drug', 'no_drug');
    }

    public function ownDrug()
    {
        return $this->belongsTo('App\Patiant', 'no_patient', 'no_patient');
    }

    public function depenserDrug()
    {
        return $this->belongsTo('App\User', 'no_user', 'no_user');
    }

    public function whenSelect()
    {
        return $this->hasOne('App\When', 'no_when', 'no_when');
    }

    public function timeSelect()
    {
        return $this->hasMany('App\Time', 'no_time', 'no_time');
    }

    public function conditionSelect()
    {
        return $this->hasMany('App\Condition', 'no_condition', 'no_condition');
    }

}
