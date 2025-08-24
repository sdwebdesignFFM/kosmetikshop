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
        Schema::table('customers', function (Blueprint $table) {
            $table->string('approval_status')->default('pending')->after('is_suspended');
            $table->string('business_document')->nullable()->after('approval_status');
            $table->timestamp('approved_at')->nullable()->after('business_document');
            $table->unsignedInteger('approved_by')->nullable()->after('approved_at');
            
            $table->index('approval_status');
            $table->foreign('approved_by')->references('id')->on('admins')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->dropForeign(['approved_by']);
            $table->dropIndex(['approval_status']);
            $table->dropColumn(['approval_status', 'business_document', 'approved_at', 'approved_by']);
        });
    }
};
