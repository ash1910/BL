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
