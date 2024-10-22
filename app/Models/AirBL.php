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
        'accounting_information',
        'agent_iata_code',
        'account_number',
        'airport_of_departure',
        'reference_number',
        'to_a',
        'by_first_carrier',
        'to_b',
        'by_a',
        'to_c',
        'by_b',
        'currency',
        'chgs_code',
        'declared_value_for_carriage',
        'declared_value_for_customs',
        'ppd_v',
        'coll_v',
        'ppd_o',
        'coll_o',
        'airport_of_destination',
        'ammount_of_insurance',
        'flight_no',
        'flight_date',
        'no_of_pieces_rcp',
        'gross_weight',
        'kg_lb',
        'rate_class',
        'commodity_item_no',
        'chargeable_weight',
        'rate_charge',
        'total',
        'nature_and_quantity_of_goods',
        'prepaid',
        'collect',
        'valuation_charge_a',
        'valuation_charge_b',
        'tax_a',
        'tax_b',
        'total_other_charges_due_agent_a',
        'total_other_charges_due_agent_b',
        'total_other_charges_due_carrier_a',
        'total_other_charges_due_carrier_b',
        'total_prepaid',
        'total_collect',
        'currency_conversion_rates',
        'cc_charges_in_dest_currency',
        'charges_at_destination',
        'total_collect_charges',

    ];
}
