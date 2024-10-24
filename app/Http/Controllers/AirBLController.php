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
        $request->validate([
            'shipper_name_and_address' => 'nullable',
            'shipper_account_number' => 'nullable',
            'consignee_name_and_address' => 'nullable',
            'consignee_account_number' => 'nullable',
            'issuing_carrier_agent_name_and_city' => 'nullable',
            'accounting_information' => 'nullable',
            'agent_iata_code' => 'nullable',
            'account_number' => 'nullable',
            'airport_of_departure' => 'nullable',
            'reference_number' => 'nullable',
            'to_a' => 'nullable',
            'by_first_carrier' => 'nullable',
            'to_b' => 'nullable',
            'by_a' => 'nullable',
            'to_c' => 'nullable',
            'by_b' => 'nullable',
            'currency' => 'nullable',
            'chgs_code' => 'nullable',
            'declared_value_for_carriage' => 'nullable',
            'declared_value_for_customs' => 'nullable',
            'by_first_carrier' => 'nullable',
            'ppd_v' => 'nullable',
            'coll_v' => 'nullable',
            'ppd_o' => 'nullable',
            'coll_o' => 'nullable',
            'handling_information' => 'nullable',
            'airport_of_destination' => 'nullable',
            'ammount_of_insurance' => 'nullable',
            'flight_no' => 'nullable',
            'flight_date' => 'nullable',
            'no_of_pieces_rcp' => 'nullable',
            'gross_weight' => 'nullable',
            'kg_lb' => 'nullable',
            'rate_class' => 'nullable',
            'commodity_item_no' => 'nullable',
            'chargeable_weight' => 'nullable',
            'rate_charge' => 'nullable',
            'total' => 'nullable',
            'nature_and_quantity_of_goods' => 'nullable',
            'prepaid' => 'nullable',
            'collect' => 'nullable',
            'valuation_charge_a' => 'nullable',
            'valuation_charge_b' => 'nullable',
            'tax_a' => 'nullable',
            'tax_b' => 'nullable',
            'total_other_charges_due_agent_a' => 'nullable',
            'total_other_charges_due_agent_b' => 'nullable',
            'total_other_charges_due_carrier_a' => 'nullable',
            'total_other_charges_due_carrier_b' => 'nullable',
            'total_prepaid' => 'nullable',
            'total_collect' => 'nullable',
            'currency_conversion_rates' => 'nullable',
            'cc_charges_in_dest_currency' => 'nullable',
            'charges_at_destination' => 'nullable',
            'total_collect_charges' => 'nullable',


         ]);

        AirBL::create([
            'shipper_name_and_address' => $request->shipper_name_and_address,
            'shipper_account_number' => $request->shipper_account_number,
            'consignee_name_and_address' => $request->consignee_name_and_address,
            'consignee_account_number' => $request->consignee_account_number,
            'issuing_carrier_agent_name_and_city' => $request->issuing_carrier_agent_name_and_city,
            'accounting_information' => $request->accounting_information,
            'agent_iata_code' => $request->agent_iata_code,
            'account_number' => $request->account_number,
            'airport_of_departure' => $request->airport_of_departure,
            'reference_number' => $request->reference_number,
            'to_a' => $request->to_a,
            'by_first_carrier' => $request->by_first_carrier,
            'to_b' => $request->to_b,
            'by_a' => $request->by_a,
            'to_c' =>$request->to_c,
            'by_b' => $request->by_b,
            'currency' => $request->currency,
            'chgs_code' => $request->chgs_code,
            'declared_value_for_carriage' => $request->declared_value_for_carriage,
            'declared_value_for_customs' => $request->declared_value_for_customs,
            'by_first_carrier' => $request->by_first_carrier,
            'ppd_v' => $request->ppd_v,
            'coll_v' => $request->coll_v,
            'ppd_o' => $request->ppd_o,
            'coll_o' => $request->coll_o,
            'handling_information' =>$request->handling_information,
            'airport_of_destination' => $request->airport_of_destination,
            'ammount_of_insurance' => $request->ammount_of_insurance,
            'flight_no' => $request->flight_no,
            'flight_date' => $request->flight_date,
            'no_of_pieces_rcp' => $request->no_of_pieces_rcp,
            'gross_weight' => $request->gross_weight,
            'kg_lb' => $request->kg_lb,
            'rate_class' => $request->rate_class,
            'commodity_item_no' => $request->commodity_item_no,
            'chargeable_weight' => $request->chargeable_weight,
            'rate_charge' => $request->rate_charge,
            'total' => $request->total,
            'nature_and_quantity_of_goods' => $request->nature_and_quantity_of_goods,
            'prepaid' => $request->prepaid,
            'collect' => $request->collect,
            'valuation_charge_a' => $request->valuation_charge_a,
            'valuation_charge_b' => $request->valuation_charge_b,
            'tax_a' => $request->tax_a,
            'tax_b' => $request->tax_b,
            'total_other_charges_due_agent_a' => $request->total_other_charges_due_agent_a,
            'total_other_charges_due_agent_b' => $request->total_other_charges_due_agent_b,
            'total_other_charges_due_carrier_a' => $request->total_other_charges_due_carrier_a,
            'total_other_charges_due_carrier_b' => $request->total_other_charges_due_carrier_b,
            'total_prepaid' => $request->total_prepaid,
            'total_collect' => $request->total_collect,
            'currency_conversion_rates' => $request->currency_conversion_rates,
            'cc_charges_in_dest_currency' => $request->cc_charges_in_dest_currency,
            'charges_at_destination' => $request->charges_at_destination,
            'total_collect_charges' => $request->total_collect_charges,

    
       ]);

        return redirect('/airbl-list')->with('status','Airwaybill Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(AirBL $id)
    {
        //
        return view('show-AirBL', ['data' => $id ]); 
    }

        /**
     * Display the specified resource.
     */
    public function print(AirBL $id)
    {
        //
        return view('print-AirBL', ['data' => $id ]); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AirBL $id)
    {
        //
        return view('modify-AirBL', ['data' => $id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $info = AirBL::findOrFail($id);

        $request->validate([
            'shipper_name_and_address' => 'nullable',
            'shipper_account_number' => 'nullable',
            'consignee_name_and_address' => 'nullable',
            'consignee_account_number' => 'nullable',
            'issuing_carrier_agent_name_and_city' => 'nullable',
            'accounting_information' => 'nullable',
            'agent_iata_code' => 'nullable',
            'account_number' => 'nullable',
            'airport_of_departure' => 'nullable',
            'reference_number' => 'nullable',
            'to_a' => 'nullable',
            'by_first_carrier' => 'nullable',
            'to_b' => 'nullable',
            'by_a' => 'nullable',
            'to_c' => 'nullable',
            'by_b' => 'nullable',
            'currency' => 'nullable',
            'chgs_code' => 'nullable',
            'declared_value_for_carriage' => 'nullable',
            'declared_value_for_customs' => 'nullable',
            'by_first_carrier' => 'nullable',
            'ppd_v' => 'nullable',
            'coll_v' => 'nullable',
            'ppd_o' => 'nullable',
            'coll_o' => 'nullable',
            'handling_information' => 'nullable',
            'airport_of_destination' => 'nullable',
            'ammount_of_insurance' => 'nullable',
            'flight_no' => 'nullable',
            'flight_date' => 'nullable',
            'no_of_pieces_rcp' => 'nullable',
            'gross_weight' => 'nullable',
            'kg_lb' => 'nullable',
            'rate_class' => 'nullable',
            'commodity_item_no' => 'nullable',
            'chargeable_weight' => 'nullable',
            'rate_charge' => 'nullable',
            'total' => 'nullable',
            'nature_and_quantity_of_goods' => 'nullable',
            'prepaid' => 'nullable',
            'collect' => 'nullable',
            'valuation_charge_a' => 'nullable',
            'valuation_charge_b' => 'nullable',
            'tax_a' => 'nullable',
            'tax_b' => 'nullable',
            'total_other_charges_due_agent_a' => 'nullable',
            'total_other_charges_due_agent_b' => 'nullable',
            'total_other_charges_due_carrier_a' => 'nullable',
            'total_other_charges_due_carrier_b' => 'nullable',
            'total_prepaid' => 'nullable',
            'total_collect' => 'nullable',
            'currency_conversion_rates' => 'nullable',
            'cc_charges_in_dest_currency' => 'nullable',
            'charges_at_destination' => 'nullable',
            'total_collect_charges' => 'nullable',
         ]);

         $input = $request->all();
         $info->fill($input)->save();

         return redirect('airbl-list')->with('status','AirWaybill Updated Successfully!');
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
