<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $primaryKey = 'OrderID';

    protected $fillable = [
        'CustomerID',
        'EmployeeID',
        'OrderDate',
        'RequiredDate',
        'ShippedDate',
        'ShipVia',
        'Freight',
        'ShipName',
        'ShipAddress',
        'ShipCity',
        'ShipRegion',
        'ShipPostalCode',
        'ShipCountry',
    ];

    public $timestamps = false;

    public function customer()
    {
        return $this->belongsTo('App\Models\Customer', 'CustomerID', 'CustomerID');
    }

    public function employee()
    {
        return $this->belongsTo('App\Models\Employee', 'EmployeeID', 'EmployeeID');
    }

    public function orderDetails()
    {
        return $this->hasMany('App\Models\OrderDetail', 'OrderID', 'OrderID');
    }

    public function shipper()
    {
        return $this->belongsTo('App\Models\Shipper', 'ShipVia', 'ShipperID');
    }

}
