<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['LastName', 'FirstName', 'Title', 'TitleOfCourtesy', 'BirthDate', 'HireDate', 'Address', 'City', 'Region', 'PostalCode', 'Country', 'HomePhone', 'Extension', 'Photo', 'Notes', 'ReportsTo', 'PhotoPath'];
    protected $primaryKey = 'EmployeeID';
    public $timestamps = false;

    public function employees()
    {
        return $this->hasMany('App\Models\Employee', 'ReportsTo', 'EmployeeID');
    }

    public function orders()
    {
        return $this->hasMany('App\Models\Order', 'EmployeeID', 'EmployeeID');
    }

    public function employeeTerritories()
    {
        return $this->hasMany('App\Models\EmployeeTerritory', 'EmployeeID', 'EmployeeID');
    }

    public function customers()
    {
        return $this->hasMany('App\Models\Customer', 'SupportRepID', 'EmployeeID');
    }

    public function employee()
    {
        return $this->belongsTo('App\Models\Employee', 'ReportsTo', 'EmployeeID');
    }
}
