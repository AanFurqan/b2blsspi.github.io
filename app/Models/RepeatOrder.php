<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RepeatOrder extends Model
{
    use HasFactory;
    protected $table = 'repeat_orders';
    protected $primaryKey = 'id';
    protected $fillable = [
        'sales_id',
        'OrderDate',
        'CustomerID',
        'CustomerName',
        'OrderStatus',
        'ProductID',
        'Quantity',
        'Price',
        'total_price',
        'DeliveryPeriod',
        'Remarks',
    ];


    public function sales()
    {
        return $this->belongsTo(Sales::class, 'sales_id', 'id');
    }
}
