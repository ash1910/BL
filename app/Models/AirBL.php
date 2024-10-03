<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AirBL extends Model
{
    use HasFactory;

    protected $fillable = [
        'shipper_name_and_address',
        'shipper_account_number',
        'consignee_name_and_address',
        'consignee_account_number',
    ];
}
