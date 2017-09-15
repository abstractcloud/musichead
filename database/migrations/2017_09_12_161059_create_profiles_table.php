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
            $table->string('avatar');
			$table->string('title');
            $table->date('birthday');
            $table->enum('gender', ['M', 'F']);
			$table->unsignedSmallInteger('country_id');
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
