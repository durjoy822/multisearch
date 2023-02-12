<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Excel;

class ExcelController extends Controller
{
   public function excelIndex(){
       return view('admin.excel.index',[
           'excels'=>Excel::all(),
       ]);
   }
   public function importExcel(Request $request){
dd($request->all());
       $request->validate(
           [
               'excel_file' => 'required|mimes:XLSX',

           ]);
   }
}
