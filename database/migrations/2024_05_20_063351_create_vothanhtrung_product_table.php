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
        Schema::create('vothanhtrung_product', function (Blueprint $table) {
            $table->id(); // id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY
            $table->unsignedBigInteger('category_id')->notNull(); // category_id INT UNSIGNED NOT NULL
            $table->unsignedBigInteger('brand_id')->notNull(); // brand_id INT UNSIGNED NOT NULL
            $table->string('name', 1000)->notNull(); // name VARCHAR(1000) NOT NULL
            $table->string('slug', 1000)->notNull(); // slug VARCHAR(1000) NOT NULL
            $table->float('price')->notNull(); // price FLOAT NOT NULL
            $table->float('pricesale')->nullable(); // pricesale FLOAT NULL
            $table->string('image', 1000)->notNull(); // image VARCHAR(1000) NOT NULL
            $table->unsignedInteger('qty')->notNull(); // qty INT UNSIGNED NOT NULL
            $table->mediumText('detail')->notNull(); // detail MEDIUMTEXT NOT NULL
            $table->string('description', 255)->nullable(); // description VARCHAR(255) NULL
            $table->dateTime('created_at')->notNull(); // created_at DATETIME NOT NULL
            $table->unsignedBigInteger('created_by')->notNull(); // created_by INT UNSIGNED NOT NULL
            $table->dateTime('updated_at')->nullable(); // updated_at DATETIME NULL
            $table->unsignedBigInteger('updated_by')->nullable(); // updated_by INT UNSIGNED NULL
            $table->unsignedTinyInteger('status')->default(2); // status TINYINT(2) UNSIGNED DEFAULT 2
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vothanhtrung_product');
    }
};
