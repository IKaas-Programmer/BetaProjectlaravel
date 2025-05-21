<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('agendas', function (Blueprint $table) {
            if (!Schema::hasColumn('agendas', 'title')) {
                $table->string('title')->after('id');
            }
            if (!Schema::hasColumn('agendas', 'description')) {
                $table->text('description')->nullable()->after('title');
            }
            if (!Schema::hasColumn('agendas', 'user_id')) {
                $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete()->after('description');
            }
        });
    }

    public function down(): void
    {
        Schema::table('agendas', function (Blueprint $table) {
            if (Schema::hasColumn('agendas', 'user_id')) {
                $table->dropForeign(['user_id']);
                $table->dropColumn('user_id');
            }
            if (Schema::hasColumn('agendas', 'description')) {
                $table->dropColumn('description');
            }
            if (Schema::hasColumn('agendas', 'title')) {
                $table->dropColumn('title');
            }
        });
    }
};