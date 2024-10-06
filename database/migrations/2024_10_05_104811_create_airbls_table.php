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
            $table->text('shipper_name_and_address');
            $table->text('shipper_account_number');
            $table->text('consignee_name_and_address');
            $table->text('consignee_account_number');
            $table->text('issuing_carrier_agent_name_and_city');
            $table->text('account_information');
            $table->text('agent_iata_code');
            $table->text('account_number');
            $table->text('airport_of_departure');
            $table->text('reference_number');
            $table->text('to_a');
            $table->text('by_first_carrier');
            $table->text('to_b');
            $table->text('by_a');
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
