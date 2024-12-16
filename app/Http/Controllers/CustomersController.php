<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Region;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('customers.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $regions = Region::all();
        return view('customers.create', compact('regions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'CompanyName' => 'required',
            'ContactName' => 'required',
            'ContactTitle' => 'required',
            'Address' => 'required',
            'City' => 'required',
            'Region' => 'required',
            'PostalCode' => 'required',
            'Country' => 'required',
            'Phone' => 'required',
            'Fax' => 'required',
        ]);

        $customer = new Customer();
        $customer->CompanyName = $request->input('CompanyName');
        $customer->ContactName = $request->input('ContactName');
        $customer->ContactTitle = $request->input('ContactTitle');
        $customer->Address = $request->input('Address');
        $customer->City = $request->input('City');
        $customer->Region = $request->input('Region');
        $customer->PostalCode = $request->input('PostalCode');
        $customer->Country = $request->input('Country');
        $customer->Phone = $request->input('Phone');
        $customer->Fax = $request->input('Fax');
        $customer->save();

        return redirect()->route('customers.index')
            ->with('success', 'Customer created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
