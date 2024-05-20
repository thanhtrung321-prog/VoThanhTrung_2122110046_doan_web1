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
        Schema::create('vothanhtrung_menu', function (Blueprint $table) {
            $table->id(); // id INT AUTO_INCREMENT PRIMARY KEY
            $table->string('name', 1000)->notNull(); // name VARCHAR(1000) NOT NULL
            $table->string('link', 1000)->notNull(); // link VARCHAR(1000) NOT NULL
            $table->unsignedBigInteger('table_id')->nullable(); // table_id INT UNSIGNED NULL
            $table->string('type', 255)->notNull(); // type VARCHAR(255) NOT NULL
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
        Schema::dropIfExists('vothanhtrung_menu');
    }
};
