<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarketAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('market_agents', function (Blueprint $table) {
            $table->increments('id');
            $table->increments('agent_name');
            $table->increments('phone_number');
            $table->increments('physical_address');
            $table->increments('next_of_kin_name');
            $table->increments('next_of_kin_phone_number');
            $table->increments('date_of_birth');
            $table->increments('agent_number');
            $table->increments('identity_number');
            $table->increments('photo');
            $table->increments('market_id');
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
        Schema::dropIfExists('market_agents');
    }
}
