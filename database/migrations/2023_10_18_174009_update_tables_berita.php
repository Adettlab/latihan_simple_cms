<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PHPUnit\Framework\Attributes\After;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('tables_berita', function (Blueprint $table) {
            $table->foreignId('id_users')->after('id_categories')->constrained('users','id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tables_berita', function (Blueprint $table) {
            $table->dropForeign(['id_categories']);
            $table->dropColumn('id_categories');
        });
    }
};
