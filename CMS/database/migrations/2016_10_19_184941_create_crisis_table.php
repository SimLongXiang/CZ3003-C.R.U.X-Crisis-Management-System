<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrisisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		Schema::create('crisis', function (Blueprint $table) {
            $table->increments('caseID');
            $table->text('crisisName');
            $table->string('crisisCategory');
            $table->string('crisisDescription');
			$table->text('crisisLocation');
			$table->string('crisisRemarks');
			$table->string('crisisLevel');
			$table->string('crisisLoggedBy');
			$table->dateTime('crisisDateTime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
		Schema::drop('crisis');
    }
}
