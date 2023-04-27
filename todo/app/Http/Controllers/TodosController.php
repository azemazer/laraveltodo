<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\Template\Template;
use App\Models\Todos;

class TodosController extends Controller
{
    public function liste(){
        return view("home", ["todos" => Todos::all()]);
    }
    // public function __invoke(){
    //     //...
    // }
}
