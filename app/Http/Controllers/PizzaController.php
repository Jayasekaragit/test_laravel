<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;


class PizzaController extends Controller
{
    //
    function getData(){
        return Pizza::all();
    }
}
