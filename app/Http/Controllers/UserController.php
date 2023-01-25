<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Controllers\UserController;
use App\Http\Requests\UserRegisterPost;

class UserController extends Controller
{
     /**
     * 会員登録画面
     * 
     * @return \Illuminate\View\View
     */
    public function index()
    {
        
        
        return view('user.index');
    }
    /**
     * 会員登録
     */
    public function register(UserRegisterPost $request)
    {
         // validate済みのデータの取得
        $datum = $request->validated();
        var_dump($datum); exit;
    }
}