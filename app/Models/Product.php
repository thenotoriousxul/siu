<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model{
    protected $fillable = ['ProductName', 'SupplierID', 'CategoryID', 'QuantityPerUnit', 'UnitPrice', 'UnitsInStock', 'UnitsOnOrder', 'ReorderLevel', 'Discontinued'];

    protected $primaryKey = 'ProductID';

    public $timestamps = false;

    public function category(){
        return $this->belongsTo('App\Models\Category', 'CategoryID', 'Category ID');
    }

    public function supplier(){
        return $this->belongsTo('App\Models\Supplier', 'SupplierID', 'SupplierID');
    }

    public function orderDetails(){
        return $this->hasMany('App\Models\OrderDetail', 'ProductID', 'ProductID');
    }

    public function orders(){
        return $this->hasManyThrough('App\Models\Order', 'App\Models\OrderDetail', 'ProductID', 'OrderID', 'ProductID', 'OrderID');
    }

    public function customers(){
        return $this->hasManyThrough('App\Models\Customer', 'App\Models\Order', 'ProductID', 'CustomerID', 'ProductID', 'CustomerID');
    }

    public function employees(){
        return $this->hasManyThrough('App\Models\Employee', 'App\Models\Order', 'ProductID', 'EmployeeID', 'ProductID', 'EmployeeID');
    }

    public function regions(){
        return $this->hasManyThrough('App\Models\Region', 'App\Models\Order', 'ProductID', 'RegionID', 'ProductID', 'RegionID');
    }

    public function territories(){
        return $this->hasManyThrough('App\Models\Territory', 'App\Models\Order', 'ProductID', 'TerritoryID', 'ProductID', 'TerritoryID');
    }

    public function shippers(){
        return $this->hasManyThrough('App\Models\Shipper', 'App\Models\Order', 'ProductID', 'ShipVia', 'ProductID', 'ShipVia');
    }

    public function suppliers(){
        return $this->hasManyThrough('App\Models\Supplier', 'App\Models\Product', 'ProductID', 'SupplierID', 'ProductID', 'SupplierID');
    }

    public function categories(){
        return $this->hasManyThrough('App\Models\Category', 'App\Models\Product', 'ProductID', 'CategoryID', 'ProductID', 'CategoryID');
    }

    
}