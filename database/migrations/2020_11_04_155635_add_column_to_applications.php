<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToApplications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('applications', function (Blueprint $table) {
            $table->dateTime('app_date')->nullable();
            $table->longText('comment')->nullable();
            $table->string('company')->nullable()->change();
            $table->string('contactPerson')->nullable()->change();
            $table->string('email')->nullable()->change();
            $table->string('phone')->nullable()->change();
            $table->string('post_title')->nullable()->change();
            $table->string('link')->nullable()->change();
            $table->string('location')->nullable()->change();
            $table->longText('description')->nullable()->change();
            $table->string('sent_files')->nullable()->change();
            $table->longText('motivation_letter')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('applications', function (Blueprint $table) {
            //
        });
    }
}
