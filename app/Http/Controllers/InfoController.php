<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        
        //return view('dashboard');

        $data = Info::all();
        return view('dashboard', ['datas' => $data]);
    }

    /**
     * Show the form for creating a new resource
     */
    public function create()
    {
        //
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //print_r($_REQUEST);exit;
        //
        // $request->validate([
        //     'bl_number' => 'required|string|max:255',
        //     'shipper' => 'required|string|max:255',
        //     'consignee' => 'required|string|max:255',
        //     'notify_party' => 'required|string|max:255',
        //     'place_of_receipt' => 'required|string|max:255',
        //     'port_of_loading' => 'required|string|max:255',
        //     'date_of_issue' => 'required|string|max:255',
        //     'for_delivery_apply_to' => 'required|string|max:255',
        //     'ocean_vessel' => 'required|string|max:255',
        //     'voyage_no' => 'required|string|max:255',
        //     'port_of_discharge' => 'required|string|max:255',
        //     'final_destination' => 'required|string|max:255',
        //     'freight_payable_at' => 'required|string|max:255',
        //     'number_of_original_bl' => 'required|string|max:255',
        // ]);

        Info::create([
            'bl_number' => $request->bl_number,
            'shipper' => $request->shipper,
            'consignee' => $request->consignee,
            'notify_party' => $request->notify_party,
            'place_of_receipt' => $request->place_of_receipt,
            'port_of_loading' => $request->port_of_loading,
            'date_of_issue' => $request->date_of_issue,
            'for_delivery_apply_to' => $request->for_delivery_apply_to,
            'ocean_vessel' => $request->ocean_vessel,
            'voyage_no' => $request->voyage_no,
            'port_of_discharge' => $request->port_of_discharge,
            'final_destination' => $request->final_destination,
            'freight_payable_at' => $request->freight_payable_at,
            'number_of_original_bl' => $request->number_of_original_bl,
            'marks_container_seal_no' => $request->marks_container_seal_no,
            'number_of_packages' => $request->number_of_packages,
            'description_of_packages_and_goods' => $request->description_of_packages_and_goods,
            'gross_weight' => $request->gross_weight,
            'measurement' => $request->measurement,
            'on_board_date' => $request->on_board_date,
    
       ]);

        return redirect('/dashboard')->with('status','BL Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Info $id)
    {
        //
        return view('form', ['data' => $id ]); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Info $id)
    {
        //print_r($id);exit;
        //
        //$data = Info::findOrFail($id);
        //return view('modify.edit', compact('data'));
        //  $data = Info::find($id);
        //  return view('modify', ['data' => $data]); 
        return view('modify', ['data' => $id]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Info $info)
    {
        //
        $info->update([
            'bl_number' => $request->bl_number,
            'shipper' => $request->shipper,
            'consignee' => $request->consignee,
            'notify_party' => $request->notify_party,
            'place_of_receipt' => $request->place_of_receipt,
            'port_of_loading' => $request->port_of_loading,
            'date_of_issue' => $request->date_of_issue,
            'for_delivery_apply_to' => $request->for_delivery_apply_to,
            'ocean_vessel' => $request->ocean_vessel,
            'voyage_no' => $request->voyage_no,
            'port_of_discharge' => $request->port_of_discharge,
            'final_destination' => $request->final_destination,
            'freight_payable_at' => $request->freight_payable_at,
            'number_of_original_bl' => $request->number_of_original_bl,
    
    
       ]);
       //print_r($_REQUEST);exit;
        //return redirect('/dashboard')->with('status','BL Updated Successfully');
        return redirect()->route('dashboard')->with('status', 'BL Updated Successfully!');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Info $id)
    {
        //
        $id->delete();
        return redirect()->route('dashboard')->with('status', 'BL Deleted Successfully');
      
    }
}
