<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AirBL extends Model
{
    use HasFactory;
    protected $table = 'airbls';
    protected $fillable = [
        'shipper_name_and_address',
        'shipper_account_number',
        'consignee_name_and_address',
        'consignee_account_number',
        'issuing_carrier_agent_name_and_city',
        'account_information',
        'agent_iata_code',
        'account_number',
        'airport_of_departure',
        'reference_number',
        'to_a',
        'by_first_carrier',
        'to_b',
        'by_a',
    ];
}
