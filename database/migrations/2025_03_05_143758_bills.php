<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_customer');
            $table->date('date_order');
            $table->double('total');
            $table->string('payment', 200);
            $table->string('note', 500)->nullable();
            $table->timestamps();

            $table->foreign('id_customer')->references('id')->on('customers')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bills');
    }
};
