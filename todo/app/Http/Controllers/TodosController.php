<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\Template\Template;

class TodosController extends Controller
{
    public function liste(){
        return view("template");
    }
    // public function __invoke(){
    //     //...
    // }
}
