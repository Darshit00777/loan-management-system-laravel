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
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->string('cname');
            $table->decimal('lamount',10,2);
            $table->decimal('irate',10,2);
            $table->decimal('tenure',10,2);
            $table->decimal('pfees',10,2);
            $table->date('sdate');
            $table->decimal('pfees_amt', 10,2);
            $table->decimal('emi', 10,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
