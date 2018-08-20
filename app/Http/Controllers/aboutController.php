<?php
namespace App\Http\Controllers;


class aboutController extends Controller {
    
    
    public function indexPage(){
        
        $name = 'Cloud storage Demo Page';
        return view('about',compact('name'));
        
    }
    
}


?>
