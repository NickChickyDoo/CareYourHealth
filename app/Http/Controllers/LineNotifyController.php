<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LineNotifyController extends Controller
{
    public function sent(){
        $token = 'JP9QCo8Ja2NM7Ks7Umhmmz0gwYaVsX8a6RrSDJBqRK5';
        $ln = new KS\Line\LineNotify($token);

        $ln->send($assignment);
    }
}
