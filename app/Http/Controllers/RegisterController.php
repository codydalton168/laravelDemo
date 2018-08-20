<?php
namespace App\Http\Controllers;


class RegisterController extends Controller {

	public function indexPage(){
		
        	return view('Register');

	}

	public function registerPage(){
	
		GlobalsALL('POST');
		
		echo $GLOBALS['name'];

	
		exit;
	
	}
}




?>