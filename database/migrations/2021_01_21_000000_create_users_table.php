<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('surname');
            $table->unsignedInteger('cicle_id');
            $table->foreign('cicle_id')->references('id')->on('cicles');
            $table->boolean('actived')->default(false);
            $table->string('email')->unique();
            $table->string('email_verified_at');
            $table->string('password');
            $table->string('type');
            $table->integer('num_offer_applied');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
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
