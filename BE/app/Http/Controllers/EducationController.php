<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user= $request->user();
        $educations = $user->educations;
        if (count($educations) == 0){
            return response()->json(['status'=>false,'message'=> 'there is not any submitted education']);
        }
        else{
            return response()->json(['status'=>true, $educations]);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all() , [
            'degree'=>'required|string',
            'school'=>'required|string',
            'field'=>'required|string'

        ]);
        if ($validator->fails()){
            return response()->json(['status'=>false,'message'=> $validator->messages()]);
        }
        $education = Education::create([
            'user_id'=>$request->user()->id,
             'degree'=>$request->degree,
             'school'=>$request->school,
             'field'=>$request->field,
             'start_date'=>$request->start_date,
             'end_date'=>$request->end_date,
        ]);
        if (!$education){
            return response()->json(['status'=>false,'message'=> 'education dosnt save']);
        }
        else
            return response()->json(['status'=>true, $education]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Education $education)
    {
        if (!$education){
            return response()->json(['status'=>false,'message'=>'education dosnt exists.']);
        }
        else
             return response()->json(['status'=>false, $education]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Education $education)
    {
        $validator = Validator::make($request->all() , [
            'degree'=>'required|string',
            'school'=>'required|string',
            'field'=>'required|string',
        ]);
        if ($validator->fails()){
            return response()->json(['status'=>false,'message'=> $validator->messages()]);
        }
        $education = Education::update([
             'user_id'=>$request->user()->id,
             'degree'=>$request->degree,
             'school'=>$request->school,
             'field'=>$request->field,
             'start_date'=>$request->start_date,
             'end_date'=>$request->end_date,
        ]);
        if (!$education){
            return response()->json(['status'=>false,'message'=> 'education dosnt updated']);
        }
        else
            return response()->json(['status'=>true, $education]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Education $education)
    {
        if ($education->delete()){
            return response()->json(['status'=>true, 'message'=> 'education deleted successfully']);
        }
        else{
            return response()->json(['status'=>false, 'message'=> 'education doesnt delete']);
        }
    }
}
