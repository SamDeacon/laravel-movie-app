<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about(){
        $first = "Turnip";
        $last = "Deacon";
        $people = [
             "Taylor BOtwell", "Dayle Reese", "Eric Plob"
        ];
        $cars = [
            //  "Taylor BOtwellcar", "Dayle Reesecar", "Eric Plobcar"
        ];
        
        return view ('pages.about', compact('first', 'last', 'people', 'cars'));
    }
    
        public function contact(){

        
        return view ('pages.contact');
    }
}
