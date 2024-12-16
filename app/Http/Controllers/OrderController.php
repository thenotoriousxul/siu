<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\Product;

class OrderController extends Controller
{
    public function create()
    {
        $customers = Customer::all();
        $employees = Employee::all();
        $products = Product::all();
        return view('orders.create', compact('customers', 'employees', 'products'));
    }

    public function indexOrders()
    {
        return view('orders.index');
    }   

    public function registerOrder(Request $request)
    {
        $request->validate([
            'CustomerID' => 'required|exists:customers,CustomerID',
            'EmployeeID' => 'required|exists:employees,EmployeeID',
            'OrderDate' => 'required|date',
            'RequiredDate' => 'required|date',
            'ShippedDate' => 'nullable|date',
            'ShipVia' => 'required|integer',
            'Freight' => 'required|numeric',
            'ShipName' => 'required|string|max:40',
            'ShipAddress' => 'required|string|max:60',
            'ShipCity' => 'required|string|max:15',
            'ShipRegion' => 'nullable|string|max:15',
            'ShipPostalCode' => 'required|string|max:10',
            'ShipCountry' => 'required|string|max:15',
            'products.*.id' => 'required|exists:products,ProductID',
            'products.*.quantity' => 'required|integer',
            'products.*.unit_price' => 'required|numeric',
            'products.*.discount' => 'required|numeric',
        ]);

        $order = Order::create([
            'CustomerID' => $request->CustomerID,
            'EmployeeID' => $request->EmployeeID,
            'OrderDate' => $request->OrderDate,
            'RequiredDate' => $request->RequiredDate,
            'ShippedDate' => $request->ShippedDate,
            'ShipVia' => $request->ShipVia,
            'Freight' => $request->Freight,
            'ShipName' => $request->ShipName,
            'ShipAddress' => $request->ShipAddress,
            'ShipCity' => $request->ShipCity,
            'ShipRegion' => $request->ShipRegion,
            'ShipPostalCode' => $request->ShipPostalCode,
            'ShipCountry' => $request->ShipCountry,
        ]);

        foreach ($request->products as $product) {
            OrderDetail::create([
                'OrderID' => $order->OrderID,
                'ProductID' => $product['id'],
                'Quantity' => $product['quantity'],
                'UnitPrice' => $product['unit_price'],
                'Discount' => $product['discount'],
            ]);
        }

        return redirect()->route('register-order')->with('success', 'Order created successfully!');
    }
}