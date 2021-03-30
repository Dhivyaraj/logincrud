<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function edit(Request $request){
        $userDetails = User::select('id','name','email','phone','image','dob','address','city','state','country')->where('id',$request->id)->first();
        return view('edit',['userDetails'=>$userDetails]);
    }

    public function update(UpdateUserRequest $request){
        //dd($request->hasFile('image'));die;
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
            $isUpdated = User::where('id',$request->id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone' => $request['phone'],
            'image' => $filename,
            'dob' => $request['dob'],
            'address' => $request['address'],
            'city' => $request['city'],
            'state' => $request['state'],
            'country' => $request['country']
                ]);
        if($isUpdated){
            return redirect()->back()->with('success_msg',trans('messages.user_updated'));
        }else{
            return redirect()->back()->with('error_msg',trans('messages.error_msg'));
        }

    }

    public function delete(Request $request){
        $isDeleted = User::where('id',$request->id)->delete();
        if($isDeleted){
            return redirect()->back()->with('success_msg',trans('messages.user_deleted'));
        }else{
            return redirect()->back()->with('error_msg',trans('messages.error_msg'));
        }
    }
}
