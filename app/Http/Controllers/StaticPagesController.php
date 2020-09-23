<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    //
    public function home(){
        echo "<pre>";
        var_dump($_SERVER["REMOTE_ADDR"]);die;
    }
}
