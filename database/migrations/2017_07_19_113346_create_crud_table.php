<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrudTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crud', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name'); /* 追加 */
            $table->string('mail');     /* 追加 */
            $table->string('gender');   /* 追加 */
            $table->integer('age');     /* 追加 */
            $table->string('pref');     /* 追加 */
            $table->string('birthday'); /* 追加 */
            $table->string('tel',11);   /* 追加 */

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
        Schema::dropIfExists('crud');
    }
}
