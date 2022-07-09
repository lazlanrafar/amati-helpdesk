<?php

namespace App\Http\Controllers\Aset;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class APController extends Controller
{
    public function index(){
        return view('pages.aset.ap.index');
    }
}
