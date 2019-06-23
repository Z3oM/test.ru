<?php
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use App;





class TestController extends Controller
{
 
  public function calcFive()
  {
	$a = 10;
	$b = $a + 62;
	  
    return view('egor', [
		'hello'=>$b,
		'evrey'=>$a
		
	]);
  }
  
  
}