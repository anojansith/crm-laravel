<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
                Schema::create('activities', function (Blueprint $table) {
                    $table->increments('id');
                    $table->string('company_name');
                    $table->string('date');
                    $table->string('type_of_activity');
                    $table->string('outcome');   
                    $table->string('sales_person_name');                     
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
        Schema::drop('activities');
    }
}
