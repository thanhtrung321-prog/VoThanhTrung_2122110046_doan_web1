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
        Schema::create('vothanhtrung_orderdetail', function (Blueprint $table) {
            $table->id(); // id INT AUTO_INCREMENT PRIMARY KEY
            $table->unsignedBigInteger('order_id')->notNull(); // order_id INT UNSIGNED NOT NULL
            $table->unsignedBigInteger('product_id')->notNull(); // product_id INT UNSIGNED NOT NULL
            $table->float('price')->notNull(); // price FLOAT NOT NULL
            $table->unsignedInteger('qty')->notNull(); // qty INT UNSIGNED NOT NULL
            $table->float('amount')->notNull(); // amount FLOAT NOT NULL
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vothanhtrung_orderdetail');
    }
};
