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
            $table->text('shipper')->nullable();
            $table->text('consignee')->nullable();
            $table->text('notify_party')->nullable();
            $table->text('place_of_receipt')->nullable();
            $table->text('port_of_loading')->nullable();
            $table->date('date_of_issue')->nullable();
            $table->text('for_delivery_apply_to')->nullable();
            $table->text('ocean_vessel')->nullable();
            $table->text('voyage_no')->nullable();
            $table->text('port_of_discharge')->nullable();
            $table->text('place_of_delivery')->nullable();
            $table->text('final_destination')->nullable();
            $table->text('freight_payable_at')->nullable();
            $table->text('number_of_original_bl')->nullable();
            $table->text('marks_container_seal_no')->nullable();
            $table->text('number_of_packages')->nullable();
            $table->text('description_of_packages_and_goods')->nullable();
            $table->text('gross_weight')->nullable();
            $table->text('measurement')->nullable();
            $table->text('shipped_on_board_the_vessel')->nullable();
            $table->date('on_board_date')->nullable();
            $table->text('freight_and_charges')->nullable();
            $table->text('prepaid')->nullable();
            $table->text('collect')->nullable();
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
