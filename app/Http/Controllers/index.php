<?php
namespace App\Http\Controllers;


class index extends Controller {
    
    
    public function home(){
    
        $name = 'Cloud storage Demo Page';
        return view('welcome',compact('name'));
        
    }

}


?>
