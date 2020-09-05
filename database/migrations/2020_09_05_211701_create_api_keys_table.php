<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApiKeysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('api_keys', function (Blueprint $table) {
            $table->bigIncrements('_id');
            $table->string('_str', 128)->unique();
            $table->timestamp('date_published')->nullable();
            $table->string('name', 32)->unique();
            $table->timestamp('_created_at');
            $table->timestamp('_updated_at')->nullable();
            $table->timestamp('_deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('api_keys');
    }
}
