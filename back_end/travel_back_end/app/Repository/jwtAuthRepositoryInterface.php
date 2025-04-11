<?php

namespace App\Repository;

use Illuminate\Http\Request;

interface JwtAuthRepositoryInterface{
    public function register(Request $request);
    public function  login(Request $request); 
    public function getUser();
    public function logout();
        
    

    
}