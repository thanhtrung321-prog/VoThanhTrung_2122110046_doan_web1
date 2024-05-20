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
        Schema::create('vothanhtrung_contact', function (Blueprint $table) {
            $table->id(); // id INT AUTO_INCREMENT PRIMARY KEY
            $table->unsignedBigInteger('user_id')->nullable(); // user_id INT UNSIGNED NULL
            $table->string('name', 255)->notNull(); // name VARCHAR(255) NOT NULL
            $table->string('email', 255)->notNull(); // email VARCHAR(255) NOT NULL
            $table->string('phone', 255)->notNull(); // phone VARCHAR(255) NOT NULL
            $table->string('title', 255)->notNull(); // title VARCHAR(255) NOT NULL
            $table->mediumText('content')->notNull(); // content MEDIUMTEXT NOT NULL
            $table->unsignedBigInteger('reply_id')->default(0); // reply_id INT UNSIGNED DEFAULT 0
            $table->dateTime('created_at')->notNull(); // created_at DATETIME NOT NULL
            $table->dateTime('updated_at')->nullable(); // updated_at DATETIME NULL
            $table->unsignedBigInteger('updated_by')->nullable(); // updated_by INT UNSIGNED NULL
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vothanhtrung_contact');
    }
};
