<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;

    protected $table = 'salesorders';
    protected $primaryKey = 'id';
    protected $fillable = [
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
    protected static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            $model->total_price = $model->Quantity * $model->Price;
        });
    }
}
