<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('tencongviec');
            $table->string('tencongty');
            $table->string('mucluong');
            $table->string('kinhnghiem');
            $table->string('yeucaubangcap');
            $table->string('chucvu');
            $table->string('hinhthuclamviec');
            $table->string('soluongtuyen');
            $table->string('diadiemlamviec');
            $table->longText('mota');
            $table->longText('yeucau');
            $table->longText('quyenloi');
            $table->string('cachungtuyen');
            $table->date('hannophoso');
            $table->integer('nhatuyendung_id');
            $table->integer('loainganh_id');
            $table->integer('tinhthanh_id');
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
        Schema::dropIfExists('jobs');
    }
}
