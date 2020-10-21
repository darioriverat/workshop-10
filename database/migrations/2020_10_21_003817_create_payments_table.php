<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Constants\PaymentStatus;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reference', 32);
            $table->unsignedInteger('request_id')->nullable()->index();
            $table->tinyInteger('status')->default(PaymentStatus::PENDING);
            $table->text('message')->nullable();
            $table->string('process_url')->nullable();
            $table->string('payment_method', 16)->nullable();
            $table->string('payment_method_name', 128)->nullable();
            $table->string('issuer_name', 128)->nullable();
            $table->string('receipt', 20)->nullable();
            $table->string('authorization', 40)->nullable();
            $table->string('currency', 3)->nullable();
            $table->double('total_paid')->nullable();
            $table->dateTime('paid_at')->nullable();
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
        Schema::dropIfExists('payments');
    }
}
