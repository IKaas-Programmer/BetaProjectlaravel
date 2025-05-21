<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('articles_comments', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable()->after('article_id');
            // If you want a foreign key constraint:
            // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::table('articles_comments', function (Blueprint $table) {
            // If you added a foreign key, drop it first:
            // $table->dropForeign(['user_id']);
            $table->dropColumn('user_id');
        });
    }
};