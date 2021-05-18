<?php

namespace App\Http\Controllers\FRONY;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class TestController extends BaseController
{
    /*public function __construct ()
    {
        $this->middleware ('auth')->except('showtest');
    }*/

    public function showtest () {

      return 'HI MAHDI';
    }

    public function showtest1 () {

        $obj = [];
        $obj['name'] = 'Mahdi';
        $obj['age'] = 16;
   return view('welcome',$obj);

    }

}
