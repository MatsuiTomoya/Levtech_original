<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReserveController extends Controller
{
    public function index(Reserve $reserve)
    {
        return $reserve->get();
        
    }
}
