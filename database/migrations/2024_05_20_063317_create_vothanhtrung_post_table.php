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
        Schema::create('vothanhtrung_post', function (Blueprint $table) {
            $table->id(); // id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY
            $table->unsignedBigInteger('topic_id')->nullable(); // topic_id INT UNSIGNED NULL
            $table->string('title', 1000)->notNull(); // title VARCHAR(1000) NOT NULL
            $table->string('slug', 1000)->notNull(); // slug VARCHAR(1000) NOT NULL
            $table->mediumText('detail')->notNull(); // detail MEDIUMTEXT NOT NULL
            $table->string('image', 1000)->notNull(); // image VARCHAR(1000) NOT NULL
            $table->string('type', 100)->notNull(); // type VARCHAR(100) NOT NULL
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
        Schema::dropIfExists('vothanhtrung_post');
    }
};
