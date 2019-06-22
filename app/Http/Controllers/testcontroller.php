<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;



class TestController extends Controller
{
 
  public function calcFive()
  {
	$a = 10;
	$b = $a + 62;
	  
    return view('egor', ['calcFiveeee' => 'asdasdsdad']);
  }
  
  
}