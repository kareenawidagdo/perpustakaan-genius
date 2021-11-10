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
            $table->id();
            $table->string('name', 100);
            $table->string('email', 50)->unique();
            $table->string('email_verified', 5)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('member', 6)->unique()->nullable();
            $table->string('account_status', 1)->default('2');
            $table->string('token')->unique();
            $table->timestamp('last_login')->nullable();
            $table->string('phone', 15);
            $table->string('photo')->default('default-profile.png');
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
