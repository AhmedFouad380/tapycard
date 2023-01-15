<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('profile_url');
            $table->string('ar_first_name')->nullable();
            $table->string('en_first_name')->nullable();
            $table->string('ar_last_name')->nullable();
            $table->string('en_last_name')->nullable();
            $table->string('ar_job_title')->nullable();
            $table->string('en_job_title')->nullable();
            $table->string('ar_company')->nullable();
            $table->string('en_company')->nullable();
            $table->string('ar_title')->nullable();
            $table->string('en_title')->nullable();
            $table->longText('ar_designation')->nullable();
            $table->longText('en_designation')->nullable();
            $table->string('ar_sub_title')->nullable();
            $table->string('en_sub_title')->nullable();
            $table->longText('ar_about')->nullable();
            $table->longText('en_about')->nullable();
            $table->string('image')->nullable();
            $table->string('cover')->nullable();
            $table->enum('is_active',['active','inactive'])->default('active');
            $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete();
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
        Schema::dropIfExists('profiles');
    }
}
