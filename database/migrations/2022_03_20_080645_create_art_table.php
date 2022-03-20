<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateArtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('art', function (Blueprint $table) {
            $table->id('art_id')->comment('作品ID');
            $table->string('art_name')->comment('作品名');
            $table->text('picture')->nullable()->comment('作品画像');
            $table->text('production_date')->comment('製作日');
            $table->unsignedBigInteger('size_id')->nullable()->comment('サイズID');
            $table->unsignedBigInteger('art_type_id')->nullable()->comment('作品種別ID');
            $table->unsignedBigInteger('color_id')->nullable()->comment('カラーID');
            $table->boolean('picture_frame')->nullable()->default(0)->comment('額');
            $table->unsignedBigInteger('user_id')->nullable()->comment('ユーザーID');
            $table->unsignedBigInteger('event_id')->comment('イベントID');
            $table->boolean('sold_flag')->nullable()->default(0)->comment('売却済フラグ');
            $table->boolean('delete_flag')->nullable()->default(0)->comment('削除フラグ');
            $table->timestamp('registration_time')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'))->comment('登録日時');
            $table->timestamp('update_time')->nullable()->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'))->comment('更新日時');

            $table->foreign('size_id')->references('size_id')->on('sizes');
            $table->foreign('art_type_id')->references('art_type_id')->on('art_types');
            $table->foreign('color_id')->references('color_id')->on('colors');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('CASCADE')->onUpdate('CASCADE');
            $table->foreign('event_id')->references('event_id')->on('events');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('art');
    }
}
