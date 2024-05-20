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
        Schema::create('vothanhtrung_order', function (Blueprint $table) {
            $table->id(); // id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY
            $table->unsignedBigInteger('user_id')->notNull(); // user_id INT UNSIGNED NOT NULL
            $table->string('name', 255)->notNull(); // name VARCHAR(255) NOT NULL
            $table->string('phone', 255)->notNull(); // phone VARCHAR(255) NOT NULL
            $table->string('email', 255)->notNull(); // email VARCHAR(255) NOT NULL
            $table->string('address', 255)->notNull(); // address VARCHAR(255) NOT NULL
            $table->string('note', 255)->nullable(); // note VARCHAR(255) NULL
            $table->dateTime('created_at')->notNull(); // created_at DATETIME NOT NULL
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
        Schema::dropIfExists('vothanhtrung_order');
    }
};
