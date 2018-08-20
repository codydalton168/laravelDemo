<?php
namespace App\Http\Controllers;


class pricingController extends Controller {
    
    
    public function indexPage(){
        
        $name = 'Cloud storage Demo Page';
        
        return view('pricing',compact('name'));
        
    }
    
}


?>
