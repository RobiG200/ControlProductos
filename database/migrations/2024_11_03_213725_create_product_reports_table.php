<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductReportsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_reports', function (Blueprint $table) {
            $table->id('id');
            $table->string('product_name');
            $table->string('product_code');
            $table->interger('product_stock');
            $table->decimal('product_price')->10(2);
            $table->decimal('total_price')->10(2);
            $table->timestamp('creation_date');
            $table->timestamp('modification_date');
            $table->string('category_name');
            $table->string('created_by_user');
            $table->string('modified_by_user');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('product_reports');
    }
}
