<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileElementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_elements', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->string('sub_type')->nullable();
            $table->string('value')->nullable();
            $table->string('ar_title')->nullable();
            $table->string('en_title')->nullable();
            $table->enum('is_active',['active','inactive'])->default('active');
            $table->foreignId('profile_id')->nullable()->constrained('profiles')->nullOnDelete();
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
        Schema::dropIfExists('profile_elements');
    }
}
