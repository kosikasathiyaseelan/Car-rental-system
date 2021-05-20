<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required,|string|between:2,100',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|string|confirmed|min:6'
            
        ]);

        if($validator->fails()){
            return response()->json(['status_code'=>400,'message'=>'Bad request']);
        }
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->save();
        return response()->json([
            'status_code'=>200,
            'message'=>'User created successfully!'
        ]);
    }
    public function login(Request $request){
    	
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|string|confirmed|min:6'
            
        ]);
        if($validator->fails()){
            return response()->json(['status_code'=>400,'message'=>'Bad request']);
        }
        $credentials=request(['email','password']);
        if(!Auth::attempt[$credentials])
        {
            return response()->json([
                'status_code'=>500,
                'message'=>'Unauthorized'
            ]);
        }
        $user=User::where('email',$request->email)->first();
        $tokenResult=$user->createToken('authToken')->plainTextToken;
        return response()->json([
            'status_code'=>200,
            'token'=>$tokenResult
        ]);

    }

}
