<?php

namespace App\Http\Controllers;

use App\Proker;
use Illuminate\Http\Request;

class ProkerController extends Controller
{
    public function index(){

        $proker = Proker::All();

        return view('Proker.index',compact('proker'));
    }
}
