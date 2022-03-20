<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('art_types', function (Blueprint $table) {
            $table->id('art_type_id')->comment('作品種別ID');
            $table->string('type_name')->nullable()->comment('種別名');
            $table->string('delete_flag')->nullable()->comment('削除フラグ');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('art_types');
    }
}
