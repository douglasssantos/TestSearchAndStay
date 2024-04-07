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
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            $defaultAddress = [
                "street" => null,
                "number" => null,
                "complement" => null,
                "district" => null,
                "city" => null,
                "state" => null,
                "postal_code" => null
            ];

            $table->json('address')
                ->default(json_encode($defaultAddress, JSON_THROW_ON_ERROR));
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stores');
    }
};
