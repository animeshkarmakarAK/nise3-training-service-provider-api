<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionSubGroupPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permission_sub_group_permissions', function (Blueprint $table) {
            $table->unsignedInteger('permission_sub_group_id')->unsigned();
            $table->unsignedInteger('permission_id')->unsigned();
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
            $table->dropForeign('permission_sub_group_permission_permission_sub_group_id_foreign');
            $table->dropForeign('permission_sub_group_permission_permission_id_foreign');
        });
    }
}
