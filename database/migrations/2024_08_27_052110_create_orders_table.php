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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->text('shipper');
            $table->text('consignee');
            $table->text('carrier');
            $table->text('notify_address');
            $table->text('vessel_details');
            $table->text('voyage');
            $table->text('receiving_unit');
            $table->text('type_of_service');
            $table->text('job_order_number');
            $table->text('place_of_receipt');
            $table->text('port_of_loading');
            $table->text('port_of_discharge');
            $table->text('final_pd');
            $table->date('job_order_date');
            $table->text('marks_and_no');
            $table->text('general_description_of_goods');
            $table->text('comments');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
