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
        Schema::table('book_platform', function (Blueprint $table) {
            $table->dropForeign(['book_id']);
        $table->foreign('book_id')->references('id')->on('books')->onDelete('cascade');

        $table->dropForeign(['platform_id']);
        $table->foreign('platform_id')->references('id')->on('platforms')->onDelete('cascade');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('book_platform', function (Blueprint $table) {
            //
        });
    }
};
