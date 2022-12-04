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
        Schema::create('form_infos', function (Blueprint $table) {
            $table->id();
            $table->string('name_bangla');
            $table->string('name_english');
            $table->string('mobile_no');
            $table->string('f_name_bangla');
            $table->string('f_name_english');
            $table->string('f_nid_no');
            $table->string('m_name_bangla');
            $table->string('m_name_english');
            $table->string('m_nid_no');
            $table->string('f_prof');
            $table->string('f_annual_income')->nullable();
            $table->string('f_workplace')->nullable();
            $table->string('m_prof');
            $table->string('m_annual_income')->nullable();
            $table->string('m_workplace')->nullable();
            $table->string('birth_date');
            $table->string('birth_cert_no');
            $table->string('nationality');
            $table->string('gender');
            $table->string('religion');
            $table->string('blood_group')->nullable();
            $table->string('present_address');
            $table->string('pr_address_thana');
            $table->string('pr_address_subdist');
            $table->string('pr_address_dist');
            $table->string('permnanent_address');
            $table->string('perm_address_thana');
            $table->string('perm_address_subdist');
            $table->string('perm_address_dist');
            $table->string('session_year');
            $table->string('class_to_admit');
            $table->string('prev_school')->nullable();
            $table->string('parent_working_here_name')->nullable();
            $table->string('parent_working_here_dept')->nullable();
            $table->string('parent_working_here_pay_code')->nullable();
            $table->string('freedomfighter_name')->nullable();
            $table->string('ff_relation')->nullable();
            $table->mediumText('ff_certificate')->nullable();
            $table->mediumText('autism_certificate')->nullable();
            $table->string('school_empl_name')->nullable();
            $table->string('school_empl_dept')->nullable();
            $table->string('school_empl_pay_code')->nullable();
            $table->string('sibling_name')->nullable();
            $table->string('sibling_class')->nullable();
            $table->string('sibling_roll')->nullable();
            $table->mediumText('photo');
            $table->mediumText('birth_certificate');
            $table->mediumText('father_nid');
            $table->mediumText('mother_nid');
            $table->string('reg_id');
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
        Schema::dropIfExists('form_infos');
    }
};
