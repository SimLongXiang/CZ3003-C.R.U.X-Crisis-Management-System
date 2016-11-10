<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncidentReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('IncidentReports', function (Blueprint $table) {
            $table->increments('caseID');
            $table->string('incidentName');
            $table->string('incidentCategory');
            $table->text('description');
			$table->string('incidentLocation');
			$table->string('remarks');
			$table->string('alertLevel');
			$table->string('loggedBy');
			$table->dateTime('datetimeOfIncident');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('IncidentReports');
    }
}
