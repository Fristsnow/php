<?php

namespace App\Http\Controllers;

use App\Exceptions\BaseException;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function login(LoginRequest $request)
    {
        $user = User::where(['email'=>$request->email])->first();
        if (!$user) {
            throw new BaseException(422);
        }
        if (!password_verify($request->password, $user->password)){
            throw new BaseException(401,'password error');
        }
        $user->token = md5($user->email);
        $user->save();
        return $this->success($user->makeHidden(['username']));
    }
    public function logout(){
        $user = Auth::user();
//        dd($user);
        $user->token = null;
        $user->save();
        return $this->success();
    }
}
