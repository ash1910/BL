<?php

namespace App\Http\Controllers;

use App\Models\AirBL;
use Illuminate\Http\Request;
use Auth;

class AirBLController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $user = Auth::user();
        $data = AirBL::all();
        return view('airbl-list', ['datas' => $data], compact('user'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("new-AirBL");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        /* $request->validate([
            'shipper_name_and_address' => 'nullable',
            'shipper_account_number' => 'nullable',
            'consignee_name_and_address' => 'nullable',
            'consignee_account_number' => 'nullable',

         ]);*/

        AirBL::create([
            'shipper_name_and_address' => $request->shipper_name_and_address,
            'shipper_account_number' => $request->shipper_account_number,
            'consignee_name_and_address' => $request->consignee_name_and_address,
            'consignee_account_number' => $request->consignee_account_number,
            'issuing_carrier_agent_name_and_city' => $request->issuing_carrier_agent_name_and_city,
            'account_information' => $request->account_information,
            'agent_iata_code' => $request->agent_iata_code,
            'account_number' => $request->account_number,
            'airport_of_departure' => $request->airport_of_departure,
            'reference_number' => $request->reference_number,
            'to_a' => $request->to_a,
            'by_first_carrier' => $request->by_first_carrier,
            'to_b' => $request->to_b,
            'by_a' => $request->by_a,

    
       ]);

        return redirect('/airbl-list')->with('status','Airwaybill Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(AirBL $airBL)
    {
        //
        return view("AirBL");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AirBL $airBL)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AirBL $airBL)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AirBL $id)
    {
        //
        $id->delete();
        return redirect('airbl-list')->with('status','Airwaybill Deleted Successfully!');
    }
}
