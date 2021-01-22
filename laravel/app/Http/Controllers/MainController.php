<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    // public function test() {
    //   return view('start3');
    // }
    public function test2() {

      $saluto = "Hermanooo";

      return view  ('start3', compact('saluto'));
    }
    public function test3() {
      return view('start3',[
        'saluto' => 'todosss'
      ]);
    }
}
