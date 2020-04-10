<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('product_id')->comment('產品編號');
            $table->string('product_title')->comment('產品標題');
            $table->string('product_brand')->comment('產品品牌');
            $table->text('product_content')->comment('產品內容');
            $table->integer('product_price')->comment('產品價格');
            $table->string('product_features')->comment('產品功能');
            $table->string('product_screen_size')->comment('產品螢幕尺寸');
            $table->string('product_processor')->comment('產品處理器種類');
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
        Schema::dropIfExists('product');
    }
}
