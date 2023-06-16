<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VcardUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('vcard_user', function (Blueprint $table) {
            $table->id('id');
            $table->string('uniqueUser');
            $table->string('name');
            $table->string('title');
            $table->string('shortDes');
            $table->string('contactNo');
            $table->string('email');
            $table->string('address');
            $table->string('profileImage');
            $table->string('homeImage');
            $table->string('role_or_designation');
            $table->string('about_description');
            $table->string('Other_options');
            $table->string('customCard');
            $table->string('contactDes');
            $table->string('password');
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
        //
        //  Schema::dropIfExists('posts');
    }
}
