<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $user = Auth::user();
        $data = Order::all();
        return view('order-list', ['datas' => $data], compact('user'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('add-order');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Order::create([
            'shipper' => $request->shipper,
            'consignee' => $request->consignee,
            'carrier' => $request->carrier,
            'notify_address' => $request->notify_address,
            'vessel_details' => $request->vessel_details,
            'voyage' => $request->voyage,
            'receiving_unit' => $request->receiving_unit,
            'type_of_service' => $request->type_of_service,
            'job_order_number' => $request->job_order_number,
            'place_of_receipt' => $request->place_of_receipt,
            'port_of_loading' => $request->port_of_loading,
            'port_of_discharge' => $request->port_of_discharge,
            'final_pd' => $request->final_pd,
            'job_order_date' => $request->job_order_date,
            'marks_and_no' => $request->marks_and_no,
            'general_description_of_goods' => $request->general_description_of_goods,
            'gross_weight' => $request->gross_weight,
            'measurement' => $request->measurement,
            'comments' => $request->comments,
        ]);

        return redirect('/order-list')->with('status','Shipping Order Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $id)
    {
        //
        return view('show-order', ['data' => $id ]); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $id)
    {
        //
        return view('modify-order', ['data' => $id]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $id)
    {
        //
        $id->delete();
        //return redirect()->route('list')->with('status', 'BL Deleted Successfully!');
        return redirect('order-list')->with('status','ORder Deleted Successfully!');
    }
}
