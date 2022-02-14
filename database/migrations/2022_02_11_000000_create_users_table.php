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
            if(!Schema::hasTable('users')){
                    Schema::create('users', function (Blueprint $table) {
                        $table->bigIncrements('id');
                        $table->string('user_name',32)-> nullable(false);
                        $table->string('email')->unique()-> nullable(false);
                        $table->string('password')-> nullable(false);
                        $table->string('password_re')-> nullable(false);
                        $table->timestamps();
                    });
            }
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
