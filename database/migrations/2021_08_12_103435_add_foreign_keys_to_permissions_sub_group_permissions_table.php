<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPermissionsSubGroupPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('permission_sub_group_permissions', function (Blueprint $table) {
            $table->foreign('permission_sub_group_id')->references('id')->on('permission_sub_group_permissions')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('permission_id')->references('id')->on('permissions')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('permission_sub_group_permissions', function (Blueprint $table) {
            $table->dropForeign('permission_sub_group_id');
            $table->dropForeign('permission_id');
        });
    }
}
