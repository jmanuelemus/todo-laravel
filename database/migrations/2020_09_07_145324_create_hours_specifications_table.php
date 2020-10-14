<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoursSpecificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hours_specifications', function (Blueprint $table) {
            $table->bigIncrements('_id');
            $table->string('_type', 32);
            $table->unsignedBigInteger('_obj');
            $table->unsignedTinyInteger('day_of_week');
            $table->time('opens');
            $table->time('closes');
            $table->date('valid_from')->nullable();
            $table->date('valid_through')->nullable();
            $table->timestamp('_created_at');
            $table->timestamp('_updated_at')->nullable();
            $table->timestamp('_deleted_at')->nullable();

            $table->index(['_obj', '_type', 'day_of_week', 'valid_through']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hours_specifications');
    }
}
