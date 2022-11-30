@extends('dashhome')
     
@section('content')

    <table style="margin-left:20px; margin-top:-120px;">
     
            <tr>
                <td>
                    <img src="/images/participent/{{$input->photo}}"  style = "margin-top: -100px;width:200px; height:200px;">
                </td>
                <td style = "display: inline-block; margin-left: -150px;">
                    <p class="title">রেজিস্ট্রেশন নংঃ {{$input->reg_id}}</p>
                    
                    <p class="title">বছর/সেশনঃ {{$input->session_year}}</p>
                    
                    <p class="title2">যে শ্রেণীতে ভর্তি হতে ইচ্ছুকঃ {{$input->class_to_admit}} </p>
                    
                </td>
            </tr>

            <br/>
            <br/>
            <br/>
            <br/>

            <tr>
                <td style = "text-align:left;">
                    <label>নাম(বাংলা):  {{$input->name_bangla}}  </label>
                </td>
                
                <td >নাম(ইংরেজি): {{$input->name_english}}</td>
                <td >মোবাইল নং: {{$input->mobile_no}}</td>
                
            </tr>
            <br/>
            <tr>
                <td style = "text-align:left;">
                    <label>পিতার নাম(বাংলা):  {{$input->f_name_bangla}}  </label>
                </td>
                
                <td > পিতার নাম(ইংরেজি): {{$input->f_name_english}}</td>
                <td >পিতার জাতীয় পরিচয়প্ত্র নং: {{$input->f_nid_no}}</td>
                
            </tr>
            <tr>
                <td style = "text-align:left;">
                    <label>পিতার পেশা:  {{$input->f_prof}}  </label>
                </td>
                
                <td >বার্ষিক আয়: {{$input->f_annual_income}}</td>
                <td >কর্মস্থান: {{$input->f_workplace}}</td>
                
            </tr>
            <tr>
                <td style = "text-align:left;">
                    <label>মাতার নাম(বাংলা):  {{$input->m_name_bangla}}  </label>
                </td>
                
                <td >মাতার নাম(ইংরেজি): {{$input->m_name_english}}</td>
                <td >মাতার জাতীয় পরিচয়প্ত্র নং: {{$input->m_nid_no}}</td>
                
            </tr>
            <tr>
                <td style = "text-align:left;">
                    <label>মাতার পেশা:  {{$input->m_prof}}  </label>
                </td>
                
                <td >বার্ষিক আয়: {{$input->m_annual_income}}</td>
                <td >কর্মস্থান: {{$input->m_workplace}}</td>
                
            </tr>
            <tr>
                <td style = "text-align:left;">
                    <label>জন্ম তারিখ:  {{$input->birth_date}}  </label>
                </td>
                
                <td >জন্ম নিবন্ধন নং: {{$input->birth_cert_no}}</td>
                <td >জাতীয়তা: {{$input->nationality}}</td>
                
            </tr>

            <tr>
                <td style = "text-align:left;">
                    <label>লিঙ্গ:  {{$input->gender}}  </label>
                </td>
                
                <td >ধর্ম: {{$input->religion}}</td>
                <td >রক্তের গ্রুপ: {{$input->blood_group}}</td>
                
            </tr>
            <tr>
                <td style = "text-align:left;">
                    <label>বর্তমান ঠিকানা:  {{$input->present_address}}/{{$input->pr_address_thana}}/{{$input->pr_address_subdist}}/{{$input->pr_address_dist}}  </label>
                </td>
                
                <td >স্থায়ী ঠিকানা: {{$input->permnanent_address}}/{{$input->perm_address_thana}}/{{$input->perm_address_subdist}}/{{$input->perm_address_dist}}</td>
                
            </tr>
            <br/>
            <tr>
                <td><h3>কোটা তথ্য</h3></td>
            </tr>
            <tr>
                <td>ইস্টার্ণ রিফাইনারীতে কর্মরত অভিভাবক</td>
                <td>নামঃ {{$input->school_empl_name}}</td>
                <td>কর্মরত শাখাঃ {{$input->school_empl_dept}}</td>
                <td>পে-কোডঃ {{$input->school_empl_pay_code}}</td>
            </tr>
            <br/>
            <br/>
            <tr>
                <td>আবেদনকারীর সহোদর/সহোদরা বা জমজ ভাই/বোন অত্র বিদ্যালয়ে অধ্যয়ণ করে কি না?</td>
                <td>নামঃ {{$input->sibling_name}}</td>
                <td>শ্রেণীঃ {{$input->sibling_class}}</td>
                <td>রোল নংঃ {{$input->sibling_roll}}</td>
            </tr>    
            <br/>
            <br/>
            
    </table>
</body>
</html>
@endsection