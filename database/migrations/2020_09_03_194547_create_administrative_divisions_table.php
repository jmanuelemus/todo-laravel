<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministrativeDivisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrative_divisions', function (Blueprint $table) {
            $table->bigIncrements('_id');
            $table->foreignId('_sup')->nullable()->index();
            $table->unsignedBigInteger('_lft')->nullable();
            $table->unsignedBigInteger('_rgt')->nullable();
            $table->string('_type', 32)->index();
            $table->json('_alias')->nullable();
            $table->string('identifier', 16)->unique();
            $table->string('postal_code', 16)->nullable();
            $table->string('name', 255);
            $table->timestamp('_created_at');
            $table->timestamp('_updated_at')->nullable();
            $table->timestamp('_deleted_at')->nullable();

            $table->unique(['_sup', 'name']);
            $table->unique(['_sup', 'postal_code']);

            $table->foreign('_sup')->references('_id')->on('administrative_divisions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('administrative_divisions');
    }
}
