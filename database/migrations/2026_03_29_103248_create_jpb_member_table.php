<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jpb_member', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('username', 200)->index('memberuid');
            $table->string('name', 100);
            $table->string('package', 20);
            $table->bigInteger('sponsor')->index('sponsor')->comment('Sponsor Recruitement');
            $table->string('sponsor_uid', 200)->nullable();
            $table->bigInteger('parent')->index('parent')->comment('Parent of Tree');
            $table->string('parent_uid', 200)->nullable();
            $table->string('position', 15)->default('')->comment('root for admin');
            $table->integer('group');
            $table->integer('gen');
            $table->integer('level');
            $table->longText('tree_sponsor');
            $table->longText('tree');
            $table->string('email')->index('jpb_member_email_idx');
            $table->string('phone', 20)->nullable()->index('phone');
            $table->string('password');
            $table->string('password_pin')->default('');
            $table->string('password_trx')->nullable();
            $table->integer('type')->default(1)->index('jpb_member_type_idx')->comment('1=Administrator,2=Member');
            $table->integer('status')->default(0)->index('jpb_member_status_idx')->comment('0=Not Active,1=Active,2=Banned,3=Deleted');
            $table->date('birthdate')->nullable();
            $table->string('gender')->nullable();
            $table->string('idcard', 50)->nullable();
            $table->string('npwp', 50)->nullable()->default('');
            $table->string('country', 10)->nullable();
            $table->smallInteger('province');
            $table->smallInteger('district');
            $table->smallInteger('subdistrict')->nullable();
            $table->string('village', 100)->nullable();
            $table->text('address')->nullable();
            $table->integer('bank');
            $table->string('bill', 20)->nullable();
            $table->string('bill_name')->nullable();
            $table->text('photo')->nullable();
            $table->text('idcard_img')->nullable();
            $table->string('qrcode_img', 200)->nullable();
            $table->double('total_omzet');
            $table->double('package_omzet');
            $table->string('rank', 30)->nullable()->index('rank');
            $table->string('referral_code', 20)->nullable();
            $table->boolean('as_stockist')->comment('1=ms, 2=stockist, 3=master');
            $table->boolean('as_stockist_pusat');
            $table->string('stockist_name', 100)->nullable();
            $table->smallInteger('stockist_province')->nullable();
            $table->smallInteger('stockist_district')->nullable();
            $table->smallInteger('stockist_subdistrict')->nullable();
            $table->string('stockist_village', 100)->nullable();
            $table->text('stockist_address')->nullable();
            $table->bigInteger('to_stockist');
            $table->smallInteger('shop_invoice');
            $table->smallInteger('shop_uniquecode');
            $table->tinyInteger('wd_status')->default(1)->comment('0="Otomatis Sistem"; 1="Manual WD"');
            $table->integer('wd_min')->default(0);
            $table->boolean('agree_ethic')->default(false);
            $table->smallInteger('change_password');
            $table->dateTime('last_login')->nullable();
            $table->bigInteger('member_hu')->index('member_hu');
            $table->integer('is_ro')->index('is_ro');
            $table->dateTime('datecreated')->index('datecreated');
            $table->dateTime('datemodified');
            $table->dateTime('dateupgrade')->nullable();
            $table->dateTime('datestockist')->nullable();
            $table->dateTime('datero')->nullable();

            $table->unique(['username'], 'jpb_member_username_unique');
            $table->unique(['parent', 'position'], 'jpb_member_parent_position_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jpb_member');
    }
};
