<?php

namespace App\Http\Controllers\Tweet2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function show(){
        return 'Single Action!';
    }
}