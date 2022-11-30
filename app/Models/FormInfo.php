<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormInfo extends Model
{
    use HasFactory;

    protected $fillable = ['name_bangla', 'name_english','mobile_no', 'f_name_bangla',
                            'f_name_english', 'f_nid_no', 'm_name_bangla', 'm_name_english', 'm_nid_no', 
                            'f_prof', 'f_annual_income', 'f_workplace',
                            'm_prof', 'm_annual_income', 'm_workplace',
                            'birth_date', 'birth_cert_no', 'nationality',
                            'gender', 'religion', 'blood_group', 'present_address',
                            'pr_address_thana', 'pr_address_subdist', 'pr_address_dist',
                            'permnanent_address', 'perm_address_thana',
                            'perm_address_subdist', 'perm_address_dist',
                            'session_year', 'class_to_admit', 'prev_school',
                            'parent_working_here_name', 'parent_working_here_dept',
                            'parent_working_here_pay_code', 
                            'freedomfighter_name', 'ff_relation',
                            'ff_certificate', 'autism_certificate',
                            'school_empl_name', 'school_empl_dept', 'school_empl_pay_code',
                            'sibling_name', 'sibling_class',
                            'sibling_roll', 'photo', 'birth_certificate',
                            'father_nid', 'mother_nid', 'reg_id'];
}
