<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    protected $primaryKey = 'OrderDetailID'; // Ensure this matches your table's primary key

    protected $table = 'orderdetails';
    protected $fillable = [
        'OrderID',
        'ProductID',
        'Quantity',
        'UnitPrice',
        'Discount',
    ];

    public $timestamps = false;

    public function order()
    {
        return $this->belongsTo('App\Models\Order', 'OrderID', 'OrderID');
    }

    public function product()
    {
        return $this->belongsTo('App\Models\Product', 'ProductID', 'ProductID');
    }
}
