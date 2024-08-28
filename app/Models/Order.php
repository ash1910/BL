<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'shipper',
        'consignee',
        'carrier',
        'notify_address',
        'vessel_details',
        'voyage',
        'receiving_unit',
        'type_of_service',
        'job_order_number',
        'place_of_receipt',
        'port_of_loading',
        'port_of_discharge',
        'final_pd',
        'job_order_date',
        'marks_and_no',
        'general_description_of_goods',
        'gross_weight',
        'measurement',
        'comments',      
    ];
}
