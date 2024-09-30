<?php

namespace App\Http\Controllers;

use App\Models\AirBL;
use Illuminate\Http\Request;

class AirBLController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view("AirBL");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AirBL $airBL)
    {
        //
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
    public function destroy(AirBL $airBL)
    {
        //
    }
}
