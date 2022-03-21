<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id('event_id')->comment('イベントID');
            $table->string('event_name')->comment('イベント名');
            $table->string('description')->comment('説明');
            $table->dateTime('start_date')->comment('開始日');
            $table->dateTime('end_date')->comment('終了日');
            $table->boolean('delete_flag')->default(0)->comment('削除フラグ');
            $table->timestamp('creation_date')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('登録日時');
            $table->timestamp('updated_date')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'))->comment('更新日時');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
