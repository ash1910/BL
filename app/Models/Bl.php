<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bl extends Model
{
    use HasFactory;

    protected $fillable = [
        'bl_number',
        'shipper',
        'consignee',
        'notify_party',
        'place_of_receipt',
        'port_of_loading',
        'date_of_issue',
        'for_delivery_apply_to',
        'ocean_vessel',
        'voyage_no',
        'port_of_discharge',
        'place_of_delivery',
        'final_destination',
        'freight_payable_at',
        'number_of_original_bl',
        'marks_container_seal_no',
        'number_of_packages',
        'description_of_packages_and_goods',
        'gross_weight',
        'measurement',
        'shipped_on_board_the_vessel',
        'on_board_date',
        'freight_and_charges',
        'prepaid',
        'collect',
    ];
}
