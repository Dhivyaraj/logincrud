<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\RegisterRequest;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Image;
class RegisterController extends Controller
{


    public function getRegister(){
        return view('register');
    }

    public function postRegister(RegisterRequest $request){
        
        try {
            $message = trans('messages.error');

            //dd(storage_path());die;
            if($request->hasFile('image')) 
            {
                

                $image = $request->file('image');
                $filename = $image->getClientOriginalName();
                $image->move(public_path('images'), $filename);

            } 
            else 
            {
                $filename = null;
            }
            //die;
            $user = User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => bcrypt($request['password']),
                'confirm_password' => bcrypt($request['confirm_password']),
                'phone' => $request['phone'],
                'image' => $filename,
                'dob' => $request['dob'],
                'address' => $request['address'],
                'city' => $request['city'],
                'state' => $request['state'],
                'country' => $request['country'],
                
            ]);
            if (!empty($user)) {
                $message = trans('messages.registered');
                    return redirect('/register')->with('success_msg', $message);
            }
        } catch (\Exception $e) {
            Log::error(__CLASS__ . "::" . __METHOD__ . "  " . $e->getMessage() . "on line" . $e->getLine());
        }
        return redirect('/register')->with('error_msg', $message);
    }
}
