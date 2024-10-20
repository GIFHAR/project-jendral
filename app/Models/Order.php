<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal_order',
        'bulan',
        'nama_buyer',
        'marking_code',
        'pengiriman_via',
        'posisi_produk',
        'estimasi_bongkar',
        'remark'
    ];
}


// class Order extends Model
// {
//     use HasFactory;

//     protected $fillable = [
//         'marking_code',
//         'order_number',
//         'order_date',
//         'status',
//         'origin_warehouse',
//         'destination_warehouse',
//         'current_location',
//         'delivery_method',
//         'receipt_number',
//     ];
// }

