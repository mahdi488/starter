<?php

namespace App\Http\Controllers\Test;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class VController extends BaseController
{
    public function Tez() {
        return 'TP TAW TP';
    }
}
