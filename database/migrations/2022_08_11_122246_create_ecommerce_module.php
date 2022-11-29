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
        Schema::create('item_categories', function (Blueprint $table) {
            $table->id();
            $table->integer('item_category_id')->default(0);
            $table->string('name');
            $table->longText('description')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('tag_title')->nullable();
            $table->longText('tag_description')->nullable();
            $table->string('tag_keyword')->nullable();
            $table->enum('st',['Published','Unpublished'])->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->integer('item_category_id')->default(0);
            $table->string('title');
            $table->string('slug')->nullable();
            $table->longText('description')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('tags');
            $table->string('demo_url');
            $table->string('regular_price')->default(0);
            $table->string('extend_price')->default(0);
            $table->string('is_regular_price')->default(0);
            $table->string('is_extend_price')->default(0);
            $table->string('regular_discount',2)->default(0);
            $table->string('extend_discount',2)->default(0);
            $table->enum('st',['Published','Unpublished'])->nullable();
            $table->integer('created_by')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('item_files', function (Blueprint $table) {
            $table->id();
            $table->integer('item_id')->default(0);
            $table->string('files');
            $table->string('is_extend')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('item_galleries', function (Blueprint $table) {
            $table->id();
            $table->integer('item_id')->default(0);
            $table->string('photo');
            $table->softDeletes();
        });
        Schema::create('item_reviews', function (Blueprint $table) {
            $table->id();
            $table->integer('item_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('rate',3)->nullable();
            $table->longtext('comment')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->integer('client_id')->default(0);
            $table->integer('item_id')->default(0);
            $table->string('qty')->default(1);
            $table->enum('license_type',['Regular','Extended'])->default('Regular');
            $table->enum('is_extend',['N','Y'])->default('N');
        });
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->integer('code')->default(0);
            $table->integer('client_id')->default(0);
            $table->integer('voucher_id')->default(0);
            $table->float('total',20,2)->default(0);
            $table->float('discount',20,2)->default(0);
            $table->float('grand_total',20,2)->default(0);
            $table->string('payment_method')->nullable();
            $table->enum('st',['Wait for payment','Cancel','Finish'])->default('Wait for payment');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('sale_details', function (Blueprint $table) {
            $table->id();
            $table->integer('sale_id')->default(0);
            $table->integer('item_id')->default(0);
            $table->enum('license_type',['Regular','Extended'])->default('Regular');
            $table->enum('is_extend',['N','Y'])->default('N');
            $table->float('price',20,0)->default(0);
            $table->float('qty',10)->default(0);
            $table->string('subtotal')->default(0);
            $table->softDeletes();
        });
        Schema::create('sale_licenses', function (Blueprint $table) {
            $table->id();
            $table->integer('sale_detail_id')->default(0);
            $table->string('code')->nullable();
            $table->date('valid_until')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('vouchers', function (Blueprint $table) {
            $table->id();
            $table->integer('code');
            $table->date('valid_until')->nullable();
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
        Schema::dropIfExists('item_categories');
        Schema::dropIfExists('items');
        Schema::dropIfExists('item_files');
        Schema::dropIfExists('item_galleries');
        Schema::dropIfExists('item_reviews');
        Schema::dropIfExists('carts');
        Schema::dropIfExists('sales');
        Schema::dropIfExists('sale_details');
        Schema::dropIfExists('sale_licenses');
        Schema::dropIfExists('vouchers');
    }
};
