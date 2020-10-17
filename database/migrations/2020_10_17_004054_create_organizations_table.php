<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->bigIncrements('_id');
            $table->foreignId('_sup')->nullable()->index();
            $table->string('_cctld', 2)->index();
            $table->timestamp('verified_at')->nullable();
            $table->string('name', 255);
            $table->timestamp('_created_at');
            $table->timestamp('_updated_at')->nullable();
            $table->timestamp('_deleted_at')->nullable();

            $table->unique(['_sup', 'name']);
            $table->unique(['name', '_cctld']);
            $table->foreign('_sup')->references('_id')->on('organizations');
            $table->foreign('_cctld')->references('identifier')->on('administrative_divisions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('organizations');
    }
}
