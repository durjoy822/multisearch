<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Session;

class ServiceController extends Controller
{

    public function dashboard(){
        return view('admin.dashboard');
    }
    public function service(Request $request)
    {
        return view('admin.services.index',[
            'services'=>Service::latest()->get(),
            ]);
    }

    public function serviceAdd()
    {
        return view('admin.services.add');
    }

    public function serviceStore(Request $request)
    {
//     dd($request->all());
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',

            ]);

        $service = new Service();
        $service->name = $request->name;
        $service->email = $request->email;
        $service->phone = $request->phone;
        $service->save();
        if ($service->id) {
            Session::flash('success', 'successfully store done.');
            return redirect(route('service.index'));
        } else {
            Session::flash('warning', 'successfully store falid.');
            return back();
        }
    }

    public function serviceEdit($id)
    {
        return view('admin.services.edit', [
            'service' => Service::find($id),
        ]);
    }

    public function serviceUpdate(Request $request)
    {
//        dd($request->all());
        $service = Service::find($request->id);
        $service->name = $request->name;
        $service->email = $request->email;
        $service->phone = $request->phone;
        $service->save();
        if ($service->id) {
            Session::flash('success', 'successfully Updated .');
            return redirect(route('service.index'));
        } else {
            Session::flash('warning', 'successfully Updated falid.');
            return back();
        }
    }

    public function serviceDelete(Request $request)
    {
        $service = Service::find($request->id);
        $service->delete();
        if ($service->id) {
            Session::flash('success', 'successfully Delete.');
            return redirect(route('service.index'));
        } else {
            Session::flash('warning', 'successfully Delete falid.');
            return back();
        }
    }
}
