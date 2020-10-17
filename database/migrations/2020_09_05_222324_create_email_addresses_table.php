<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emails', function (Blueprint $table) {
            $table->bigIncrements('_id');
            $table->string('_type', 32);
            $table->unsignedBigInteger('_obj');
            $table->timestamp('verified_at')->nullable();
            $table->string('name', 64)->unique();
            $table->timestamp('_created_at');
            $table->timestamp('_updated_at')->nullable();
            $table->timestamp('_deleted_at')->nullable();

            $table->index(['_obj', '_type']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emails');
    }
}
