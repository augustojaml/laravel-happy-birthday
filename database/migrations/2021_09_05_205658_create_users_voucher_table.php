<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersVoucherTable extends Migration {

    public function up(): void {
        Schema::create('voucher_users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('whatsapp');
            $table->string('token');
            $table->dateTime('date_of_birth');
            $table->string('how_did_you_find_us');
            $table->integer('voucher')->default(1);
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('voucher_users');
    }
}
