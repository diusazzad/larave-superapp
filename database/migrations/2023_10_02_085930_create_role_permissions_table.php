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
        Schema::create('role_permissions', function (Blueprint $table) {
            $table->unsignedBigInteger('roleId');
            $table->unsignedBigInteger('permissionId');
            $table->dateTime('createdAt');
            $table->dateTime('updatedAt')->nullable();
            $table->primary(['roleId', 'permissionId']);
            $table->index('roleId');
            $table->index('permissionId');
            $table->foreign('roleId')->references('id')->on('roles')
                ->onDelete('no action')->onUpdate('no action');
            $table->foreign('permissionId')->references('id')
                ->on('permissions')->onDelete('no action')->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role_permissions');
    }
};
