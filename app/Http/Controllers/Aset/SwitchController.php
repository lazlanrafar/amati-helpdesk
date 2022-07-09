<?php

namespace App\Http\Controllers\Aset;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SwitchController extends Controller
{
    public function index(){
        return view('pages.aset.switch.index');
    }
}
