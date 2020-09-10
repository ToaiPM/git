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
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('permission')->default(0);
            $table->integer('status')->default(1);
            $table->string('phone',50)->unique()->default("Chưa cập nhật");
            $table->string('country',50)->default("Chưa cập nhật");
            $table->string('state',50)->default("Chưa cập nhật");
            $table->string('company',50)->default("Chưa cập nhật");
            $table->string('info',50)->default("Chưa cập nhật");
            $table->string('address',150)->default("Chưa cập nhật");
            $table->string('card_type',50)->default("Chưa cập nhật");
            $table->string('card_number',50)->default("Chưa cập nhật");
            $table->string('card_SC',50)->default("Chưa cập nhật");
            $table->string('card_month',50)->default("Chưa cập nhật");
            $table->string('card_year',50)->default("Chưa cập nhật");
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
