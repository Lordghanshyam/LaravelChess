<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;

class RegistrationController extends Controller
{
   
    
    public function create()
    {
        $this->validate(request(), [
            'firstname' => 'required',
            'lastname' => 'required',
            'password' => 'required',
			'username' => 'required',
        ]);
        
        $player = Player::create(request(['firstname', 'lastname', 'password','username']));
        
        
    }
} 
 
 
 
 
 
 
 
 
 
 
 
 
 
