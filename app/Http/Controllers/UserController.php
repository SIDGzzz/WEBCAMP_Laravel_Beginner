<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Controllers\UserController;
use App\Http\Controllers\UserController\register;

class UserController extends Controller
{
     /**
     * 
     * 
     * @return \Illuminate\View\View
     */
    public function list()
    {
        
        
        return view('user.register');
    }
}