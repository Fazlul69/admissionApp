<!DOCTYPE html>
<head>
    <title>Form</title>
    <style>
    @page{
        size: 1000px 1200px; margin:0!important; padding:0!important
        
    }
    
    body {
    font-family: 'nikosh';
    }


</style>

</head>
<body>
    <table width="100%" style="margin-top:-200px;">
        <tr>
            <td colspan="5" style="text-align: center;"><h3>অনলাইন আবেদন ফর্ম (শিক্ষার্থীর তথ্য)			
			</h3></td>
        </tr>
        <br/>
        <br/>
            <tr>
                <td>
                    <img src="/images/participent/{{$input['photo']}} " style = "width:200px; height:200px;">
                </td>
                <td style = "display: inline-block; margin-left:-150px; padding:0px;">
                    <p class="title">রেজিস্ট্রেশন নংঃ {{$input['reg_id']}}</p>
                    
                    <p class="title">বছর/সেশনঃ {{$input['session_year']}}</p>
                    
                    <p class="title2">যে শ্রেণীতে ভর্তি হতে ইচ্ছুকঃ {{$input['class_to_admit']}} </p>
                    
                </td>
            </tr>

            <br/>
            <br/>
            <br/>
            <br/>

            <tr>
                <td style = "text-align:left;">
                    নাম(বাংলা):  {{$input['name_bangla']}} 
                </td>
                
                <td >নাম(ইংরেজি): {{$input['name_english']}}</td>
                <td >মোবাইল নং: {{$input['mobile_no']}}</td>
                
            </tr>
            <br/>
            <tr>
                <td style = "text-align:left;">
                    পিতার নাম(বাংলা):  {{$input['f_name_bangla']}}
                </td>
                
                <td > পিতার নাম(ইংরেজি): {{$input['f_name_english']}}</td>
                <td >পিতার জাতীয় পরিচয়প্ত্র নং: {{$input['f_nid_no']}}</td>
                
            </tr>
            <tr>
                <td style = "text-align:left;">
                    পিতার পেশা:  {{$input['f_prof']}}
                </td>
                
                <td >বার্ষিক আয়: {{$input['f_annual_income']}}</td>
                <td >কর্মস্থান: {{$input['f_workplace']}}</td>
                
            </tr>
            <tr>
                <td style = "text-align:left;">
                    মাতার নাম(বাংলা):  {{$input['m_name_bangla']}} 
                </td>
                
                <td >মাতার নাম(ইংরেজি): {{$input['m_name_english']}}</td>
                <td >মাতার জাতীয় পরিচয়প্ত্র নং: {{$input['m_nid_no']}}</td>
                
            </tr>
            <tr>
                <td style = "text-align:left;">
                    মাতার পেশা:  {{$input['m_prof']}}
                </td>
                
                <td >বার্ষিক আয়: {{$input['m_annual_income']}}</td>
                <td >কর্মস্থান: {{$input['m_workplace']}}</td>
                
            </tr>
            <tr>
                <td style = "text-align:left;">
                    জন্ম তারিখ:  {{$input['birth_date']}}
                </td>
                
                <td >জন্ম নিবন্ধন নং: {{$input['birth_cert_no']}}</td>
                <td >জাতীয়তা: {{$input['nationality']}}</td>
                
            </tr>

            <tr>
                <td style = "text-align:left;">
                    লিঙ্গ:  {{$input['gender']}}
                </td>
                
                <td >ধর্ম: {{$input['religion']}}</td>
                <td >রক্তের গ্রুপ: {{$input['blood_group']}}</td>
                
            </tr>
            <tr>
                <td style = "text-align:left;">
                    বর্তমান ঠিকানা:  {{$input['present_address']}}-{{$input['pr_address_thana']}}-{{$input['pr_address_subdist']}}-{{$input['pr_address_dist']}}
                </td>
                
                <td >স্থায়ী ঠিকানা: {{$input['permnanent_address']}}-{{$input['perm_address_thana']}}-{{$input['perm_address_subdist']}}-{{$input['perm_address_dist']}}</td>
                
            </tr>
            <br/>
            <tr>
                <td><h3>কোটা তথ্য</h3></td>
            </tr>
            <tr>
                <td>ইস্টার্ণ রিফাইনারীতে কর্মরত অভিভাবক</td>
                <td>নামঃ {{$input['school_empl_name']}}</td>
                <td style="text-align: left; margin-right:-100px;">শাখাঃ {{$input['school_empl_dept']}}</td>
                <td>পে-কোডঃ {{$input['school_empl_pay_code']}}</td>
            </tr>
            <br/>
            <br/>
            <tr>
                <td>আবেদনকারীর সহোদর/সহোদরা বা জমজ ভাই/বোন অত্র বিদ্যালয়ে অধ্যয়ণ করে কি না?</td>
                <td>নামঃ {{$input['sibling_name']}}</td>
                <td>শ্রেণীঃ {{$input['sibling_class']}}</td>
                <td>রোল নংঃ {{$input['sibling_roll']}}</td>
            </tr>    
            <br/>
            <br/>
            <tr>
                <td colspan="5">
                    <h3>আমি, {{$input['name_bangla']}}, এতদ্বারা ঘোষণা করছি যে,
                        উপরে উল্লিখিত তথ্য ও ছবি সঠিক। আমার দ্বারা প্রদত্ত কোন তথ্য মিথ্যা প্রমাণিত হলে,
                        ইনস্টিটিউট আমার ভর্তি বাতিল করার অধিকার সংরক্ষণ করে। 
                        আমি ইনস্টিটিউটের নিয়মকানুন মেনে চলার পাশাপাশি প্রয়োজনীয় সমস্ত ফি দিতে বাধ্য থাকব।			
			        </h3>
                </td>
                
            </tr>
            <tr>
                <td>
                    <button onclick="window.print()">Print this page</button>
                </td>
            </tr>
    </table>
    -------------------------------------------------------------------------------------------------------------
    <div class="card" style="width: 45rem; border-width: 0.5rem;">
        <div class = "row">
            <img src="{{asset('images/logo.png')}}"  alt="" style="margin-bottom:-100px; width:100px; height:100px;">
            <div style = "text-align: center; ">
            <p><b>ইস্টার্ণ রিফাইনারী মডেল হাই স্কুল</b></p>
            <p>উত্তর পতেঙ্গা, চট্টগ্রাম</p>
            <p>্প্রবেশ পত্র -২০১</p>
        </div>
        
    </div>
        <div class="card-body">
          <table width = "100%">
            <tr>
                <td>
                    <label>ছাত্র/ছাত্রীর নাম (বাংলায়): </label>
                </td>
                
            </tr>
            <tr>
                <td>
                    <label>ছাত্র/ছাত্রীর নাম (ইংরেজি): </label>
                </td>
                
            </tr>
            <tr>
                <td>
                    <label>যে শ্রেণীতে ভর্তি হতে ইচ্ছুকঃ </label>
                </td>
                <td>
                    <label>ক্রমিক নং(অফিস পূরণীয়): </label>
                </td>
            </tr>
            <tr>
                <td>
                    <label>লটারি ড্র/লিখিত পরিক্ষার তারিখ(অফিস পূরণীয়): </label>
                </td>
                
            </tr>
           
          </table>
           
        </div>
        <div class="row">
            <span style="text-decoration:overline dotted; margin-left: 500px;">প্রধান শিক্ষক/সম্পাদক</span>
        </div>
        
      </div>
    
</body>
</html>