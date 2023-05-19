<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->longText('category_id')->nullable();
            $table->bigInteger('user_id')->nullable();
            $table->integer('admin_id')->nullable();
            $table->string('created_by')->nullable();
            $table->text('title')->nullable();
            $table->text('slug')->nullable();
            $table->longText('blog_content')->nullable();
            $table->string('image')->nullable();
            $table->string('author')->nullable();
            $table->text('excerpt')->nullable();
            $table->string('views')->nullable();
            $table->string('visibility')->nullable();
            $table->string('featured')->nullable();
            $table->string('schedule_date')->nullable();
            $table->text('status')->nullable();
            $table->string('tag_name')->nullable();
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
        Schema::dropIfExists('places');
    }
};
