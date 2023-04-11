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
        Schema::create('product_documents', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('product_id')->nullable()->unsigned();
            $table->foreign('product_id')
            ->references('id')
            ->on('products')
            ->onDelete('cascade');

            $table->string('image');

            $table->string('title_ru');
            $table->string('title_en');
            $table->string('title_uz');

            $table->string('content_ru');
            $table->string('content_en');
            $table->string('content_uz');

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
        Schema::dropIfExists('product_documents');
    }
};
