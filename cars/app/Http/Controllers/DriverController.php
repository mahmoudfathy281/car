<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Driver;
class DriverController extends Controller
{
    //
    function driver(){
        $driver = Driver::get();

        return view('driver',[
            'drivers' => $driver
        ]);
    }
}
