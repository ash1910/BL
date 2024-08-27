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
        Schema::create('bls', function (Blueprint $table) {
            $table->id();
            $table->string('bl_number');
            $table->text('shipper');
            $table->text('consignee');
            $table->text('notify_party');
            $table->text('place_of_receipt');
            $table->text('port_of_loading');
            $table->date('date_of_issue');
            $table->text('for_delivery_apply_to');
            $table->text('ocean_vessel');
            $table->text('voyage_no');
            $table->text('port_of_discharge');
            $table->text('place_of_delivery');
            $table->text('final_destination');
            $table->text('freight_payable_at');
            $table->text('number_of_original_bl');
            $table->text('marks_container_seal_no');
            $table->text('number_of_packages');
            $table->text('description_of_packages_and_goods');
            $table->text('gross_weight');
            $table->text('measurement');
            $table->text('shipped_on_board_the_vessel');
            $table->date('on_board_date');
            $table->text('freight_and_charges');
            $table->text('prepaid');
            $table->text('collect');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bls');
    }
};
