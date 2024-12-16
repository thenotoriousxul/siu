<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegistrationController extends Controller
{
    public function registerEmployee(Request $request)
    {
        DB::statement('CALL RegisterEmployee(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [
            $request->input('FirstName'),
            $request->input('LastName'),
            $request->input('Title'),
            $request->input('BirthDate'),
            $request->input('HireDate'),
            $request->input('Address'),
            $request->input('City'),
            $request->input('Region'),
            $request->input('PostalCode'),
            $request->input('Country'),
            $request->input('HomePhone'),
            $request->input('Extension'),
            $request->input('Notes'),
            $request->input('PhotoPath'),
            $request->input('ReportsTo')
        ]);

        return response()->json(['message' => 'Employee registered successfully']);
    }

    public function registerCustomer(Request $request)
    {
        DB::statement('CALL RegisterCustomer(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', [
            $request->input('CustomerID'),
            $request->input('CompanyName'),
            $request->input('ContactName'),
            $request->input('ContactTitle'),
            $request->input('Address'),
            $request->input('City'),
            $request->input('Region'),
            $request->input('PostalCode'),
            $request->input('Country'),
            $request->input('Phone'),
            $request->input('Fax')
        ]);

        return response()->json(['message' => 'Customer registered successfully']);
    }

    public function registerTerritory(Request $request)
    {
        DB::statement('CALL RegisterTerritory(?, ?, ?)', [
            $request->input('TerritoryID'),
            $request->input('TerritoryDescription'),
            $request->input('RegionID')
        ]);

        return response()->json(['message' => 'Territory registered successfully']);
    }

    public function registerOrder(Request $request)
{
    DB::table('Orders')->insert([
        'CustomerID' => $request->input('CustomerID'),
        'EmployeeID' => $request->input('EmployeeID'),
        'OrderDate' => $request->input('OrderDate'),
        'RequiredDate' => $request->input('RequiredDate'),
        'ShippedDate' => $request->input('ShippedDate'),
        'ShipVia' => $request->input('ShipVia'),
        'Freight' => $request->input('Freight'),
        'ShipName' => $request->input('ShipName')
    ]);

    $orderId = DB::table('Orders')->latest('OrderID')->first()->OrderID;

    if (!$orderId) {
        return response()->json(['error' => 'Order ID not generated'], 400);
    }

    foreach ($request->input('OrderDetails') as $detail) {
        DB::statement('CALL RegisterOrderDetail(?, ?, ?, ?, ?)', [
            $orderId, 
            $detail['ProductID'],
            $detail['UnitPrice'],
            $detail['Quantity'],
            $detail['Discount']
        ]);
    }

    return response()->json(['message' => 'Order registered successfully']);
}



    public function createOrderForm()
    {
        return view('orders.create');
    }

    public function indexEmployees()
    {
        $employees = DB::table('Employees')->get();
        return view('Employees.index', compact('employees'));
    }

    public function indexCustomers()
    {
        $customers = DB::table('Customers')->get();
        return view('Customers.index', compact('customers'));
    }

    public function indexTerritories()
    {
        $territories = DB::table('Territories')->get();
        return view('Territories.index', compact('territories'));
    }
}
