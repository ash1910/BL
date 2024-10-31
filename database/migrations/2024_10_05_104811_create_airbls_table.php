<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('airbls', function (Blueprint $table) {
            $table->id();
            $table->string('airbl_number', 255);
            $table->integer('mawb_no_a')->nullable();
            $table->integer('mawb_no_a')->nullable();
            $table->integer('mawb_no_a')->nullable();
            $table->text('shipper_name_and_address')->nullable();
            $table->text('shipper_account_number')->nullable();
            $table->text('consignee_name_and_address')->nullable();
            $table->text('consignee_account_number')->nullable();
            $table->text('issuing_carrier_agent_name_and_city')->nullable();
            $table->text('accounting_information')->nullable();
            $table->text('agent_iata_code')->nullable();
            $table->text('account_number')->nullable();
            $table->text('airport_of_departure')->nullable();
            $table->text('reference_number')->nullable();
            $table->text('to_a')->nullable();
            $table->text('by_first_carrier')->nullable();
            $table->text('to_b')->nullable();
            $table->text('by_a')->nullable();
            $table->text('to_c')->nullable();
            $table->text('by_b')->nullable();
            $table->text('currency')->nullable();
            $table->text('chgs_code')->nullable();
            $table->text('declared_value_for_carriage')->nullable();
            $table->text('declared_value_for_customs')->nullable();
            $table->text('ppd_v')->nullable();
            $table->text('coll_v')->nullable();
            $table->text('ppd_o')->nullable();
            $table->text('coll_o')->nullable();
            $table->text('handling_information')->nullable();
            $table->text('airport_of_destination')->nullable();
            $table->text('ammount_of_insurance')->nullable();
            $table->text('flight_no')->nullable();
            $table->text('flight_date')->nullable();
            $table->text('no_of_pieces_rcp')->nullable();
            $table->text('gross_weight')->nullable();
            $table->text('kg_lb')->nullable();
            $table->text('rate_class')->nullable();
            $table->text('commodity_item_no')->nullable();
            $table->text('chargeable_weight')->nullable();
            $table->text('rate_charge')->nullable();
            $table->text('total')->nullable();
            $table->text('nature_and_quantity_of_goods')->nullable();
            $table->text('prepaid')->nullable();
            $table->text('collect')->nullable();
            $table->text('other_charges')->nullable();
            $table->text('valuation_charge_a')->nullable();
            $table->text('valuation_charge_b')->nullable();
            $table->text('tax_a')->nullable();
            $table->text('tax_b')->nullable();
            $table->text('total_other_charges_due_agent_a')->nullable();
            $table->text('total_other_charges_due_agent_b')->nullable();
            $table->text('total_other_charges_due_carrier_a')->nullable();
            $table->text('total_other_charges_due_carrier_b')->nullable();
            $table->text('total_prepaid')->nullable();
            $table->text('total_collect')->nullable();
            $table->text('currency_conversion_rates')->nullable();
            $table->text('cc_charges_in_dest_currency')->nullable();
            $table->text('charges_at_destination')->nullable();
            $table->text('total_collect_charges')->nullable();
            $table->text('signature_of_shipper_or_his_agent')->nullable();
            $table->text('executed_on_date')->nullable();
            $table->text('at_place')->nullable();
            $table->text('signature_of_issuing_carrier_or_its_agent')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('airbls');
    }
};
