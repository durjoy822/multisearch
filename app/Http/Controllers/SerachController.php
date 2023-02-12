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
        return view('admin.services.index',compact('services'));




    }



}
