<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Sharings', function (Blueprint $table) {
            $table->increments('share_id');

            $table->unsignedBigInteger('owner_id');
            $table->foreign('owner_id')->references('user_id')->on('users')
                ->onDelete('cascade');

            $table->unsignedBigInteger('shared_user');
            $table->foreign('shared_user')->references('user_id')->on('users')
                ->onDelete('cascade');

            $table->unsignedBigInteger('shared_band');
            $table->foreign('shared_band')->references('band_id')->on('bands')
                ->onDelete('cascade');

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
        Schema::enableForeignKeyConstraints();
        Schema::dropIfExists('Sharings');
        Schema::disableForeignKeyConstraints();
    }
};
