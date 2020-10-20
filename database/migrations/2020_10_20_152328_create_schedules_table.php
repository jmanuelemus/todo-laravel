<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->bigIncrements('_id');
            $table->string('_type', 32);
            $table->foreignId('_obj');
            $table->date('start_date')->nullable();
            $table->time('start_time')->nullable()->index();
            $table->unsignedTinyInteger('by_day')->nullable()->index();
            $table->unsignedTinyInteger('by_month')->nullable()->index();
            $table->unsignedTinyInteger('by_month_day')->nullable()->index();
            $table->unsignedTinyInteger('by_month_week')->nullable()->index();
            $table->date('end_date')->nullable()->index();
            $table->time('end_time')->nullable()->index();
            $table->timestamp('_created_at');
            $table->timestamp('_updated_at')->nullable();
            $table->timestamp('_deleted_at')->nullable();

            $table->index(['_obj', '_type']);
            $table->index([DB::raw('start_date DESC')]);
            $table->index([DB::raw('start_date DESC'), 'start_time']);
            $table->index('end_date', 'end_time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}
