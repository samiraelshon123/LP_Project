<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('page_content');
            $table->string('visibility');
            $table->string('status');
            $table->string('page_builder_status');
            $table->string('layout');
            $table->string('sidebar_layout');
            $table->string('navbar_variant');
            $table->string('page_class');
            $table->string('back_to_top');
            $table->string('breadcrumb_status');
            $table->string('footer_variant');
            $table->string('widget_style');
            $table->string('');
            $table->text('');
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
        Schema::dropIfExists('pages');
    }
};
