<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classes;
use App\Models\Students;
use App\Models\ClassTeacher;

class ManageController extends Controller
{
    public function deleteClass($classId){
        $targetClass= Classes::find($classId);        
        // $isStd= Students::where('classId',$classId)->exists();
        if($targetClass){
            try{
                $targetClass->delete();
                return response()->json(['success'=>true,'message'=>'Record Deleted Succesfully']);
            }catch(Exception $e){
                return response()->json(['success'=>false,'message'=>'Delete request failed.'.$e->getMessage(),500]);
            }
        }else {
            return response()->json(['success'=>false,'message'=>'Class not found.']);
        }
    }

    function updateClass(Request $request){
        $className=$request['className'];
        $classId=$request['classId'];
        $class= Classes::find($classId);
        if(!is_null($class)){
            $class->className= $className;
            $class->save();
        }        
        return response()->json(['status'=>true,'message'=>'Class update succesfully']);
    }

    function test(){
        $classes= Classes::all();
        $data= compact('classes');
        return view('test')->with($data);
    }
}
