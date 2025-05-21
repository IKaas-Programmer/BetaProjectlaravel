<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('articles_comments', function (Blueprint $table) {
            $table->unsignedBigInteger('article_id')->nullable()->after('id');
            // If you want a foreign key constraint:
            // $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::table('articles_comments', function (Blueprint $table) {
            // If you added a foreign key, drop it first:
            // $table->dropForeign(['article_id']);
            $table->dropColumn('article_id');
        });
    }
};