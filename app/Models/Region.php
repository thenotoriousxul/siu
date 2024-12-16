<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model{
    protected $fillable = ['RegionDescription'];

    protected $primaryKey = 'RegionID';

    public $timestamps = false;

    public function territories(){
        return $this->hasMany('App\Models\Territory', 'RegionID', 'RegionID');
    }

    public function customers(){
        return $this->hasManyThrough('App\Models\Customer', 'App\Models\Territory', 'RegionID', 'TerritoryID', 'RegionID', 'TerritoryID');
    }

    public function employees(){
        return $this->hasManyThrough('App\Models\Employee', 'App\Models\Territory', 'RegionID', 'TerritoryID', 'RegionID', 'TerritoryID');
    }

    public function orders(){
        return $this->hasManyThrough('App\Models\Order', 'App\Models\Customer', 'RegionID', 'CustomerID', 'RegionID', 'CustomerID');
    }

    public function orderDetails(){
        return $this->hasManyThrough('App\Models\OrderDetail', 'App\Models\Order', 'RegionID', 'OrderID', 'RegionID', 'OrderID');
    }

    public function products(){
        return $this->hasManyThrough('App\Models\Product', 'App\Models\OrderDetail', 'RegionID', 'ProductID', 'RegionID', 'ProductID');
    }

    public function shippers(){
        return $this->hasManyThrough('App\Models\Shipper', 'App\Models\Order', 'RegionID', 'ShipVia', 'RegionID', 'ShipVia');
    }

    public function suppliers(){
        return $this->hasManyThrough('App\Models\Supplier', 'App\Models\Product', 'RegionID', 'SupplierID', 'RegionID', 'SupplierID');
    }

    public function categories(){
        return $this->hasManyThrough('App\Models\Category', 'App\Models\Product', 'RegionID', 'CategoryID', 'RegionID', 'CategoryID');
    }

    
}