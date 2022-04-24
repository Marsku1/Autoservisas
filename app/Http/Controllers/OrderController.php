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
        $apsilankymo_data = $request->input('apsilankymo_data');
        $busena = 'priimtas';
        $gedimo_aprasymas = $request->input('gedimo_aprasymas');
        $autoserviso_id = $request->input('autoserviso_id');
        $marke = $request->input('marke');
        $valstybinis_numeris = $request->input('valstybinis_numeris');
        $rida = $request->input('rida');

        $data=array('apsilankymo_data'=>$apsilankymo_data,'busena'=>$busena,'gedimo_aprasymas'=>$gedimo_aprasymas,'autoserviso_id'=>$autoserviso_id,
        'marke'=>$marke,'valstybinis_numeris'=>$valstybinis_numeris,'rida'=>$rida);

        DB::table('orders')->insert($data);
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
        return OrderController::show($id);
    }

    public function edit(Request $request)
    {
        $order = Order::find($id);
        return view('order.edit', compact('order', 'id'));
    }
}
