<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Make sure columns already exist before adding FKs
            if (Schema::hasColumn('users', 'company_id') && Schema::hasColumn('users', 'role_id')) {
                $table->foreign('company_id')
                      ->references('id')->on('companies')
                      ->onDelete('set null');

                $table->foreign('role_id')
                      ->references('id')->on('roles')
                      ->onDelete('set null');
            }
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['company_id']);
            $table->dropForeign(['role_id']);
        });
    }
};
