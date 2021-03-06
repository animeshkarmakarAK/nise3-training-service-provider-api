<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedSmallInteger('role_id')->nullable();
            $table->string('name_en', 191)->nullable();
            $table->string('name_bn', 191)->nullable();
            $table->string('email', 191)->unique();
            $table->unsignedInteger('organization_id')->nullable();
            $table->unsignedInteger('institute_id')->nullable();
            $table->unsignedMediumInteger('loc_district_id')->nullable();
            $table->unsignedMediumInteger('loc_division_id')->nullable();
            $table->unsignedMediumInteger('loc_upazila_id')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 191);
            $table->string('profile_pic')->nullable();
            $table->unsignedTinyInteger('row_status')->nullable()->default(1);
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('updated_by')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
