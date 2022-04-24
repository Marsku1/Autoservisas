<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Service;
use DB;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all()->toArray();
        return view('order.list', compact('orders'));
    }

    public function createform()
    {
        $services = Service::all(['id', 'pavadinimas']);
        return view('order.create', compact('services'));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'apsilankymo_data'      =>  'required',
            'gedimo_aprasymas'      =>  'required',
            'autoserviso_id'        =>  'required',
            'marke'                 =>  'required|regex:/^([^0-9]*)$/',
            'valstybinis_numeris'   =>  'required|regex:/\pL{3}\pN{3}/',
            'rida'                  =>  'required|numeric|gte:0'
        ]);

        $apsilankymo_data = $request->input('apsilankymo_data');
        $busena = 'priimtas';
        $gedimo_aprasymas = $request->input('gedimo_aprasymas');
        $autoserviso_id = $request->input('autoserviso_id');
        $marke = $request->input('marke');
        $valstybinis_numeris = strtoupper($request->input('valstybinis_numeris'));
        $rida = $request->input('rida');

        $data=array('apsilankymo_data'=>$apsilankymo_data,'busena'=>$busena,'gedimo_aprasymas'=>$gedimo_aprasymas,'autoserviso_id'=>$autoserviso_id,
        'marke'=>$marke,'valstybinis_numeris'=>$valstybinis_numeris,'rida'=>$rida);

        $id = DB::table('orders')->insertGetId($data);
        
        return redirect()->route('order', [$id])->with('success', 'Užsakymas sukurtas');
    }

    public function show($id)
    {
        $order = Order::find($id);
        return view('order.show', ['order' => $order]);
    }

    public function cancel($id)
    {
        $order = Order::find($id);
        if($order)
        {
            $order->busena = 'atšauktas';
            $order->save();
        }
        return redirect()->route('createform');
    }

    public function edit(Request $request)
    {
        $id = $request->id;
        $order = Order::find($id);
        $services = Service::all(['id', 'pavadinimas']);
        return view('order.edit', compact('order', 'id', 'services')); 
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $order = Order::find($id);
        $this->validate($request, [
            'apsilankymo_data'      =>  'required',
            'gedimo_aprasymas'      =>  'required',
            'autoserviso_id'        =>  'required',
            'marke'                 =>  'required',
            'valstybinis_numeris'   =>  'required',
            'rida'                  =>  'required'
        ]);
              
        $order->apsilankymo_data = $request->get('apsilankymo_data');
        $order->gedimo_aprasymas = $request->get('gedimo_aprasymas');
        $order->autoserviso_id = $request->get('autoserviso_id');
        $order->marke = $request->get('marke');
        $order->valstybinis_numeris = $request->get('valstybinis_numeris');
        $order->rida = $request->get('rida');           
        $order->update();
        
        return redirect()->route('order', [$id])->with('success', 'Užsakymas redaguotas');
    }
}
