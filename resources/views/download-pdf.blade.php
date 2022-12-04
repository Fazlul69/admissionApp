<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Eastern Refinery High School</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/dashboard.scss')}}">

    <style>
        /* @page{
        size: 1000px 1200px; margin:0!important; padding:0!important
        
    } */


        @font-face {
            font-family: SutonnyOMJ;
            src: url('/fonts/SutonnyOMJ Regular.ttf');
        }

        body {
            font-family: SutonnyOMJ;
        }

        li {
            list-style: none;
        }

        @media print {
            .down_part {
                display: none;
            }

            * {
                -webkit-print-color-adjust: exact !important;
                /* Chrome, Safari 6 – 15.3, Edge */
                color-adjust: exact !important;
                /* Firefox 48 – 96 */
                print-color-adjust: exact !important;
                /* Firefox 97+, Safari 15.4+ */
            }

            html,
            body {
                width: 230mm;
                height: 297mm;
            }
        }
    </style>

</head>

<body>
    <div id="form">
        <div class="container">
            <div class="row mt-5 down_part">
                <div class="col-md-4"></div>
                <div class="col-md-4 text-center">
                    <p style="font-size: 20px;">আপনার ফরমটি ডাউনলোড করে সংরক্ষণ করুন</p>
                    <button onclick="window.print()" class="btn btn-primary">Download this page</button>
                </div>
                <div class="col-md-4"></div>

            </div>
            <div style="max-width:1300px; margin:20px auto">
                <table style="width: 100%">
                    <tr>
                        <td colspan="5" style="text-align: center;">
                            <h3>আবেদন ফর্ম (শিক্ষার্থীর তথ্য)
                            </h3>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="" style="display:flex; vertical-align: center">
                            <img src="{{asset('/images/participent/'.$input['photo'])}} " style="width:200px; height:200px;">
                            <div style=" margin:auto 5px; margin-left: 40px; width:200px">
                                <p>রেজিস্ট্রেশন নংঃ {{$input['reg_id']}}</p>
                                <p>বছর/সেশনঃ {{$input['session_year']}}</p>
                                <p>যে শ্রেণীতে ভর্তি হতে ইচ্ছুকঃ {{$input['class_to_admit']}} </p>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>নাম(বাংলা)ঃ {{$input['name_bangla']}}</td>
                        <td>নাম(ইংরেজি)ঃ {{$input['name_english']}}</td>
                        <td>মোবাইল নংঃ {{$input['mobile_no']}}</td>

                    </tr>
                    <tr>
                        <td style="text-align:left;">
                            জন্ম তারিখঃ {{$input['birth_date']}}
                        </td>

                        <td>জন্ম নিবন্ধন নংঃ {{$input['birth_cert_no']}}</td>
                        <td>জাতীয়তাঃ {{$input['nationality']}}</td>

                    </tr>

                    <tr>
                        <td style="text-align:left;">
                            লিঙ্গঃ {{$input['gender']}}
                        </td>

                        <td>ধর্মঃ {{$input['religion']}}</td>
                        <td>রক্তের গ্রুপঃ {{$input['blood_group']}}</td>

                    </tr>
                    <tr>
                        <td>
                            পিতার নাম(বাংলা)ঃ {{$input['f_name_bangla']}}
                        </td>

                        <td> পিতার নাম(ইংরেজি)ঃ {{$input['f_name_english']}}</td>
                        <td>পিতার জাতীয় পরিচয়প্ত্র নংঃ {{$input['f_nid_no']}}</td>

                    </tr>
                    <tr>
                        <td style="text-align:left;">
                            পিতার পেশাঃ {{$input['f_prof']}}
                        </td>

                        <td>বার্ষিক আয়ঃ {{$input['f_annual_income']}}</td>
                        <td>কর্মস্থানঃ {{$input['f_workplace']}}</td>

                    </tr>
                    <tr>
                        <td style="text-align:left;">
                            মাতার নাম(বাংলা)ঃ {{$input['m_name_bangla']}}
                        </td>

                        <td>মাতার নাম(ইংরেজি)ঃ {{$input['m_name_english']}}</td>
                        <td>মাতার জাতীয় পরিচয়প্ত্র নংঃ {{$input['m_nid_no']}}</td>

                    </tr>
                    <tr>
                        <td style="text-align:left;">
                            মাতার পেশাঃ {{$input['m_prof']}}
                        </td>

                        <td>বার্ষিক আয়ঃ {{$input['m_annual_income']}}</td>
                        <td>কর্মস্থানঃ {{$input['m_workplace']}}</td>

                    </tr>

                    <tr>
                        <td style="text-align:left;">
                            বর্তমান ঠিকানাঃ {{$input['present_address']}}-{{$input['pr_address_thana']}}-{{$input['pr_address_subdist']}}-{{$input['pr_address_dist']}}
                        </td>

                        <td>স্থায়ী ঠিকানাঃ {{$input['permnanent_address']}}-{{$input['perm_address_thana']}}-{{$input['perm_address_subdist']}}-{{$input['perm_address_dist']}}</td>

                    </tr>

                    <tr>
                        <td>
                            <p style="margin: 10px auto;">কোটা তথ্য</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="min-width:200px">ইস্টার্ণ রিফাইনারীতে কর্মরত অভিভাবক</td>
                        <td style="min-width:200px">নামঃ {{$input['parent_working_here_name']}}</td>
                        <td style="min-width:200px">শাখাঃ {{$input['parent_working_here_dept']}}</td>
                        <td style="min-width:200px">পে-কোডঃ {{$input['parent_working_here_pay_code']}}</td>
                    </tr>
                    <tr>
                        <td style="min-width:200px">মুক্তিযোদ্ধা কোটা</td>
                        <td style="min-width:200px">নামঃ {{$input['freedomfighter_name']}}</td>
                        <td style="min-width:200px">শাখাঃ {{$input['ff_relation']}}</td>
                        <td style="min-width:200px">পে-কোডঃ {{$input['ff_certificate']}}</td>
                    </tr>

                    <tr>
                        <td>বিদ্যালয়ে কর্মরত শিক্ষক/কর্মচারীর সন্তান কি না?</td>
                        <td>নামঃ {{$input['school_empl_name']}}</td>
                        <td>শাখাঃ {{$input['school_empl_dept']}}</td>
                    </tr>
                    <tr>
                        <td>আবেদনকারীর সহোদর/সহোদরা বা জমজ ভাই/বোন অত্র বিদ্যালয়ে অধ্যয়ণ করে কি না?</td>
                        <td>নামঃ {{$input['sibling_name']}}</td>
                        <td>শ্রেণীঃ {{$input['sibling_class']}}</td>
                        <td>রোল নংঃ {{$input['sibling_roll']}}</td>
                    </tr>
                    <tr>
                        <td style="min-width:200px">প্রতিবন্ধী কোটা</td>
                        @if(!empty($input['autism_certificate']))
                        <td style="min-width:200px">হ্যাঁ</td>
                        @else
                        <td style="min-width:200px">না</td>
                        @endif
                    </tr>

                    <tr>
                        <td colspan="5">
                            <p style="margin: 10px auto;">আমি, {{$input['name_bangla']}}, এতদ্বারা ঘোষণা করছি যে,
                                উপরে উল্লিখিত তথ্য ও ছবি সঠিক। আমার দ্বারা প্রদত্ত কোন তথ্য মিথ্যা প্রমাণিত হলে,
                                ইনস্টিটিউট আমার ভর্তি বাতিল করার অধিকার সংরক্ষণ করে।
                                আমি ইনস্টিটিউটের নিয়মকানুন মেনে চলার পাশাপাশি প্রয়োজনীয় সমস্ত ফি দিতে বাধ্য থাকব।
                            </p>
                        </td>

                    </tr>
                </table>
                <div class="row">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                    <p style="text-decoration:overline dotted; float:right; margin-right:50px;margin-top:20px">অভিভাবকের স্বাক্ষর</p>
                    </div>
                </div>
                <div style="border-top: 2px dashed black; margin-top:20px"></div>
                <div class="card" style="max-width:900px; margin-top:20px;  border-width: 0.5rem;">
                    <div class="row mt-2">
                        <div class="col-md-4">
                            <img src="{{asset('images/logo.png')}}" alt="" style=" width:100px; height:80px; margin: 15px;">
                        </div>
                        <div class="col-md-4">
                            <div style="text-align: center; ">
                                <p style="margin:5px auto;"><b>ইস্টার্ণ রিফাইনারী মডেল হাই স্কুল</b></p>
                                <p style="margin:5px auto">উত্তর পতেঙ্গা, চট্টগ্রাম</p>
                                <p style="margin:5px auto">প্রবেশ পত্র</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="{{asset('/images/participent/'.$input['photo'])}}" style="width:100px; height:100px; float:right;margin:5px;">

                        </div>

                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <ul class="list_admit mb-2">
                                <li>ছাত্র/ছাত্রীর নাম (বাংলায়)ঃ {{$input['name_bangla']}}</li>
                                <li>ছাত্র/ছাত্রীর নাম (ইংরেজি)ঃ {{$input['name_english']}}</li>
                                <li>যে শ্রেণীতে ভর্তি হতে ইচ্ছুকঃ {{$input['class_to_admit']}}</li>
                                <li>লটারি ড্র/লিখিত পরিক্ষার তারিখ(অফিস পূরণীয়)ঃ</li>
                            </ul>
                        </div>
                        <div class="col-md-6 mt-1">
                            <ul>
                                <li>রেজিস্ট্রেশন নংঃ {{$input['reg_id']}}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <p style="text-decoration:overline dotted; float:right; margin:20px">প্রধান শিক্ষক/সম্পাদক</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

</body>

</html>