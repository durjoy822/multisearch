<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class SerachController extends Controller
{
    public function serviceSearch(Request $request){

        $get_name=$request->search;
       $print= (explode(" ", $get_name));
       $services=Service::whereIn('name',$print)->get();
        // $services=Service::where('name','LIKE','%'.$get_name.'%')->get();
        return view('admin.services.index',compact('services'));




    }


//    public function getSearch($request){
//        if ($request->search){
//            $str=$request->search;
//            return preg_replace('/\s+/u',',');
//        }
//        $get_name=$request->search;
//        return preg_replace('/\s+/u',',');
//
//    }



}
