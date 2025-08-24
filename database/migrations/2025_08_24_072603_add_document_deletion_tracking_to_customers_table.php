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
            $table->boolean('document_deleted')->default(false)->after('business_document');
            $table->timestamp('document_deleted_at')->nullable()->after('document_deleted');
            $table->unsignedInteger('document_deleted_by')->nullable()->after('document_deleted_at');
            $table->string('document_deletion_reason')->nullable()->after('document_deleted_by');
            
            $table->foreign('document_deleted_by')->references('id')->on('admins')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->dropForeign(['document_deleted_by']);
            $table->dropColumn(['document_deleted', 'document_deleted_at', 'document_deleted_by', 'document_deletion_reason']);
        });
    }
};
