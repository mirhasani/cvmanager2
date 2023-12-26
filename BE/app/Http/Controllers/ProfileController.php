<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user= $request->user();
        $profile = $user->profile;
        if (!$profile){
            return response()->json(['status'=>false,'message'=> 'profile not found']);
        }
        else{
            return response()->json(['status'=>true, $profile]);
        }
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all() , [
            'full_name'=>'required|string',
            'contact_number'=>'required|min:10'
        ]);
        if ($validator->fails()){
            return response()->json(['status'=>false,'message'=> $validator->messages()]);
        }
        // $profile = Profile::create([
        //     'full_name'=>$request->full_name
        // ]);
        $profile= new Profile();
        $profile->user_id=$request->user()->id;
        $profile->full_name=$request->full_name;
        $profile->contact_number=$request->contact_number;
        $profile->birth_date=$request->birth_date;
        $profile->save();
        return response()->json(['status'=>true, $profile]);

    }

    /**
     * Display the specified resource.
     */
    public function show(Profile $profile)
    {
        
        return $profile;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profile $profile)
    {
        $validator = Validator::make($request->all() , [
            'full_name'=>'required|string',
            'contact_number'=>'required|min:10'
        ]);
        if ($validator->fails()){
            return response()->json(['status'=>false,'message'=> $validator->messages()]);
        }
        
        $profile= Profile::find($profile->id);
        $profile->full_name=$request->full_name;
        $profile->contact_number=$request->contact_number;
        $profile->birth_date=$request->birth_date;
        $profile->save();
        return response()->json(['status'=>true, $profile]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        //$profile->delete();
        return response()->json(['status'=>false,'message'=> 'you cant delete your profile']);
    }
}
