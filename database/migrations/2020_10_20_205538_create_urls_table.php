<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUrlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urls', function (Blueprint $table) {
            $table->bigIncrements('_id');
            $table->string('_type', 32);
            $table->foreignId('_obj');
            $table->string('_str', 255);
            $table->string('additional_type', 32)->nullable();
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
        Schema::dropIfExists('urls');
    }
}
