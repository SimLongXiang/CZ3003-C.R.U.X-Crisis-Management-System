<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->increments('assetID');
            $table->string('assetName');
            $table->text('assetDescription');
            $table->string('assetType');
			$table->string('assetLocation');
			$table->string('assetStatus');
			$table->string('assetRemarks');
			$table->string('assetDepartment');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::drop('assets');
    }
}
