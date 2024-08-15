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
        Schema::create('infos', function (Blueprint $table) {
            $table->id();
            //$table->timestamps();
            $table->bl_number();
            $table->shipper();
            $table->consignee();
            $table->notify_party();
            $table->place_of_reciept();
            $table->port_of_loading();
            $table->date_of_issue();
            $table->for_delivery_apply_to();
            $table->ocean_vessel();
            $table->voyage_no();
            $table->port_of_discharge();
            $table->place_of_delivery();
            $table->final_destionation();
            $table->freight_payable_at();
            $table->number_of_original_bl();
            $table->marks_container_seal_no();
            $table->number_of_packages();
            $table->description_of_packages_and_goods();
            $table->gross_weight();
            $table->measurement();
            $table->shipped_on_board_the_vessel();
            $table->on_board_date();
            $table->freight_and_charges();
            $table->prepaid();
            $table->collect();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infos');
    }
};
