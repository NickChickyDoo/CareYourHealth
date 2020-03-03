<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Treatment extends Model
{

    protected $table = 'treatments';
    protected $primaryKey = 'no_treatment';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('cheifCompaint', 'presentIllness', 'pastHistory', 'drugAllergy', 'familyHistry', 'diagnosis', 'treatment', 'no_patiant', 'no_user');

    public function treatmentPatiant()
    {
        return $this->belongsTo('App\Patiant', 'no_patiant', 'no_patiant');
    }

    public function treatmentByUser()
    {
        return $this->belongsTo('App\User', 'no_user', 'no_user');
    }

}
