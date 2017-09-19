<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->mediumIncrements('id');
            $table->unsignedMediumInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('avatar');
			$table->string('title');
            $table->date('birthday');
            $table->enum('gender', ['M', 'F']);
			$table->unsignedSmallInteger('country_id');
//            $table->foreign('country_id')->references('id')->on('countries');
			$table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
