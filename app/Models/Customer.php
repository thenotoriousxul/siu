<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['ContactName', 'CompanyName', 'Address', 'City', 'PostalCode', 'Country', 'Phone', 'Fax'];
    protected $primaryKey = 'CustomerID';
    public $timestamps = false;

    public function orders()
    {
        return $this->hasMany('App\Models\Order', 'CustomerID', 'CustomerID');
    }

    public function customerDemographics()
    {
        return $this->belongsToMany('App\Models\CustomerDemographic', 'customer_customer_demo', 'CustomerID', 'CustomerTypeID');
    }

    public function customerCustomerDemo()
    {
        return $this->hasMany('App\Models\CustomerCustomerDemo', 'CustomerID', 'CustomerID');
    }

    public function employees()
    {
        return $this->hasMany('App\Models\Employee', 'ReportsTo', 'EmployeeID');
    }

}
