<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Territory extends Model
{
    protected $fillable = ['TerritoryDescription', 'RegionID'];
    protected $primaryKey = 'TerritoryID';
    public $timestamps = false;

    public function region()
    {
        return $this->belongsTo('App\Models\Region', 'RegionID', 'RegionID');
    }

    public function employeeTerritories()
    {
        return $this->hasMany('App\Models\EmployeeTerritory', 'TerritoryID', 'TerritoryID');
    }
    
    
}
