<?php

use Illuminate\Database\Schema\Blueprint;
use App\Extensions\Migrations\AppMigration as Migration;

class CreateScanShareDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scan_share_documents', function (Blueprint $table) {
            $table->increments('id');
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
        Schema::drop('scan_share_documents');
    }
}
