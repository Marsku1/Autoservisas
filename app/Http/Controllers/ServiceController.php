<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view ('service.list')->with('services', $services);
    }

    public function edit($id)
    {
        $service = Service::find($id);
        return view('service.edit')->with('service', $service);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'miestas'      =>  'required',
            'pavadinimas'  =>  'required',
            'gatve'        =>  'required'
        ]);

        $service = Service::find($id);
        $input = $request->all();
        $service->update($input);
        return redirect('services')->with('success', 'Service updated!');
    }

    public function destroy($id)
    {
        Service::destroy($id);
        return redirect('services')->with('success', 'Service deleted!');
    }
}
