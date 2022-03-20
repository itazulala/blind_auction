<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('last_name_kana')->nullable()->comment('カナ(性)');
            $table->string('first_name_kana')->nullable()->comment('カナ(名)');
            $table->string('last_name')->nullable()->comment('性');
            $table->string('first_name')->nullable()->comment('名');
            $table->string('artist')->unique()->nullable()->comment('アーティスト名');
            $table->string('email')->nullable()->unique()->comment('メールアドレス');
            $table->string('password')->nullable()->comment('パスワード');
            $table->string( 'phone_number')->unique()->nullable()->comment('電話番号');
            $table->string( 'postal_code')->nullable()->comment('郵便番号');
            $table->string( 'prefectures')->nullable()->comment('都道府県');
            $table->string( 'address')->nullable()->comment('住所');
            $table->boolean( 'tfa_existence')->nullable()->default(0)->comment('2段階認証フラグ');
            $table->string( 'tfa_token')->nullable()->comment('2段階認証トークン');
            $table->dateTime( 'tfa_expiration')->nullable()->comment('トークン有効期限');
            $table->boolean( 'delete_flag')->nullable()->default(0)->comment('削除フラグ');
            $table->timestamp('created_at')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'))->comment('登録日時');
            $table->timestamp('updated_at')->nullable()->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'))->comment('更新日時');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
