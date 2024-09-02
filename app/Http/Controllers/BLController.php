<?php

namespace App\Http\Controllers;

use App\Models\Bl;
use Illuminate\Http\Request;

use Auth;

class BLController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        
        //return view('dashboard');
        $user = Auth::user();

        $data = Bl::all();
        return view('bl-list', ['datas' => $data], compact('user'));
    }

    /**
     * Show the form for creating a new resource
     */
    public function create()
    {
        // The fixed prefix
        $prefix = "HNS-SE";

        // Get the current year and month
        $now = new \DateTime();
        $year = $now->format('y'); // Last two digits of the current year
        $month = $now->format('m'); // Current month (01-12)

        // Get the last code from the database using Eloquent
        $lastCode = Bl::where('bl_number', 'like', $prefix . $year . $month . '%')
            ->orderBy('bl_number', 'desc')
            ->value('bl_number');

        // Extract the last 4-digit number and increment it
        $lastNumber = $lastCode ? intval(substr($lastCode, -4)) : 0;
        $newNumber = str_pad($lastNumber + 1, 4, '1000', STR_PAD_LEFT);

        // Create the new code
        $bl_number = $prefix . $year . $month . $newNumber;

        return view('new-bl', ['bl_number' => $bl_number]);
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


        $request->validate([
            'bl_number' => 'required',
            'shipper' => 'nullable',
            'consignee' => 'nullable',
            'notify_party' => 'nullable',
            'place_of_receipt' => 'nullable',
            'port_of_loading' => 'nullable',
            'date_of_issue' => 'required',
            'for_delivery_apply_to' => 'nullable',
            'ocean_vessel' => 'nullable',
            'voyage_no' => 'nullable',
            'port_of_discharge' => 'nullable',
            'place_of_delivery' => 'nullable',
            'final_destination' => 'nullable',
            'freight_payable_at' => 'nullable',
            'number_of_original_bl' => 'nullable',
            'marks_container_seal_no' => 'nullable',
            'number_of_packages' => 'nullable',
            'description_of_packages_and_goods' => 'nullable',
            'gross_weight' => 'nullable',
            'measurement' => 'nullable',
            'shipped_on_board_the_vessel' => 'nullable',
            'on_board_date' => 'required',
            'freight_and_charges' => 'nullable',
            'prepaid' => 'nullable',
            'collect' => 'nullable',
            'stamp' => 'required',

        ]);

        Bl::create([
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
            'place_of_delivery' => $request->place_of_delivery,
            'final_destination' => $request->final_destination,
            'freight_payable_at' => $request->freight_payable_at,
            'number_of_original_bl' => $request->number_of_original_bl,
            'marks_container_seal_no' => $request->marks_container_seal_no,
            'number_of_packages' => $request->number_of_packages,
            'description_of_packages_and_goods' => $request->description_of_packages_and_goods,
            'gross_weight' => $request->gross_weight,
            'measurement' => $request->measurement,
            'shipped_on_board_the_vessel' => $request->shipped_on_board_the_vessel,
            'on_board_date' => $request->on_board_date,
            'freight_and_charges' => $request->freight_and_charges,
            'prepaid' => $request->prepaid,
            'collect' => $request->collect,
            'stamp' => $request->stamp,
    
       ]);

        return redirect('/bl-list')->with('status','BL Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bl $id)
    {
        //
        return view('show-bl', ['data' => $id ]); 
    }

    /**
     * Display the specified resource.
     */
    public function print(Bl $id)
    {
        //
        return view('print-bl', ['data' => $id ]); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bl $id)
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
    public function update($id, Request $request)
    {

        //echo "<pre>";print_r($id);exit;
        //

        $info = Bl::findOrFail($id);
        

        $request->validate([
            'bl_number' => 'required',
            'shipper' => 'nullable',
            'consignee' => 'nullable',
            'notify_party' => 'nullable',
            'place_of_receipt' => 'nullable',
            'port_of_loading' => 'nullable',
            'date_of_issue' => 'required',
            'for_delivery_apply_to' => 'nullable',
            'ocean_vessel' => 'nullable',
            'voyage_no' => 'nullable',
            'port_of_discharge' => 'nullable',
            'place_of_delivery' => 'nullable',
            'final_destination' => 'nullable',
            'freight_payable_at' => 'nullable',
            'number_of_original_bl' => 'nullable',
            'marks_container_seal_no' => 'nullable',
            'number_of_packages' => 'nullable',
            'description_of_packages_and_goods' => 'nullable',
            'gross_weight' => 'nullable',
            'measurement' => 'nullable',
            'shipped_on_board_the_vessel' => 'nullable',
            'on_board_date' => 'required',
            'freight_and_charges' => 'nullable',
            'prepaid' => 'nullable',
            'collect' => 'nullable',
        ]);
    

        $input = $request->all();

        $info->fill($input)->save();


        //return redirect()->route('list')->with('status', 'BL Updated Successfully!');
        return redirect('bl-list')->with('status','BL Updated Successfully!');

    //     $info->update([
    //         'bl_number' => $request->bl_number,
    //         'shipper' => $request->shipper,
    //         'consignee' => $request->consignee,
    //         'notify_party' => $request->notify_party,
    //         'place_of_receipt' => $request->place_of_receipt,
    //         'port_of_loading' => $request->port_of_loading,
    //         'date_of_issue' => $request->date_of_issue,
    //         'for_delivery_apply_to' => $request->for_delivery_apply_to,
    //         'ocean_vessel' => $request->ocean_vessel,
    //         'voyage_no' => $request->voyage_no,
    //         'port_of_discharge' => $request->port_of_discharge,
    //         'final_destination' => $request->final_destination,
    //         'freight_payable_at' => $request->freight_payable_at,
    //         'number_of_original_bl' => $request->number_of_original_bl,
    //         'marks_container_seal_no' => $request->marks_container_seal_no,
    //         'number_of_packages' => $request->number_of_packages,
    //         'description_of_packages_and_goods' => $request->description_of_packages_and_goods,
    //         'gross_weight' => $request->gross_weight,
    //         'measurement' => $request->measurement,
    //         'on_board_date' => $request->on_board_date,
    
    
    //    ]);
       //print_r($_REQUEST);exit;
        //return redirect('/dashboard')->with('status','BL Updated Successfully');
        //return redirect()->route('dashboard')->with('status', 'BL Updated Successfully!');
    
    }

        /**
     * Clone the specified resource in storage.
     */
    public function clone(Bl $id)
    {
         // The fixed prefix
         $prefix = "HNS-SE";

         // Get the current year and month
         $now = new \DateTime();
         $year = $now->format('y'); // Last two digits of the current year
         $month = $now->format('m'); // Current month (01-12)
 
         // Get the last code from the database using Eloquent
         $lastCode = Bl::where('bl_number', 'like', $prefix . $year . $month . '%')
             ->orderBy('bl_number', 'desc')
             ->value('bl_number');
 
         // Extract the last 4-digit number and increment it
         $lastNumber = $lastCode ? intval(substr($lastCode, -4)) : 0;
         $newNumber = str_pad($lastNumber + 1, 4, '1000', STR_PAD_LEFT);
 
         // Create the new code
         $bl_number = $prefix . $year . $month . $newNumber;
 
         //return view('add', ['bl_number' => $bl_number]);

        return view('clone-bl', ['data' => $id, 'bl_number' => $bl_number]);
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bl $id)
    {
        //
        $id->delete();
        //return redirect()->route('list')->with('status', 'BL Deleted Successfully!');
        return redirect('bl-list')->with('status','BL Deleted Successfully!');
      
    }

}

