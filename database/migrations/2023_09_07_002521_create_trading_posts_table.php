<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('trading_posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('description')->nullable();
            $table->integer('origin');
            $table->integer('specialty');
            $table->integer('age');
            $table->integer('condition');
            $table->string('visitor_traffic');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('trading_posts');
    }
};
