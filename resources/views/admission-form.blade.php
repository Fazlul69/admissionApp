@extends('layouts.app')

@section('content')
<div class="container log">
    <div class="row justify-content-center">
        <div class="col-md-8">
        
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                    <form method="POST" action="{{route('submitform')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-12" style="padding-left: 0px;padding-right: 0px;">
                                <h3 class="ad-hd">অনলাইন আবেদন ফর্ম (শিক্ষার্থীর তথ্য)</h3>
                                
                            </div>
                        </div>
                        <h3>আবেদনকারীর তথ্যঃ</h3>
                       
                        
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="name_bangla" class="form-label">নাম(বাংলা)</label><svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
  <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
</svg>
                                    <input id="name_bangla" type="text" class="form-control @error('name') is-invalid @enderror" name="name_bangla" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="name_english" class="form-label">নাম(ইংরেজি)</label><svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
  <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
</svg>
                                    <input id="name_english" type="text" class="form-control @error('name_english') is-invalid @enderror" name="name_english" value="{{ old('name_english') }}" required autocomplete="name_english" autofocus>

                                    @error('name_english')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="mobile_no" class="form-label">মোবাইল নং</label><svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
  <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
</svg>
                                    <input id="mobile_no" type="text" class="form-control @error('mobile_no') is-invalid @enderror" name="mobile_no" value="{{ old('f_name') }}" required autocomplete="mobile no" autofocus>

                                    @error('mobile_no')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="f_name_bangla" class="form-label">পিতার নাম(বাংলা)</label><svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
                                        <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
                                      </svg>
                                    <input id="f_name_bangla" type="text" class="form-control @error('f_name_bangla') is-invalid @enderror" name="f_name_bangla">

                                    @error('f_name_bangla')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="f_name_english" class="form-label">পিতার নাম(ইংরেজি)</label><svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
  <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
</svg>
                                    <input id="f_name_english" type="text" class="form-control @error('f_name_english') is-invalid @enderror" name="f_name_english" value="{{ old('f_name_english') }}" required autocomplete="father name" autofocus>

                                    @error('f_name_english')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>  
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="f_nid_no" class="form-label">পিতার জাতীয় পরিচয় পত্রের নং</label><svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
                                        <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
                                      </svg>
                                    <input id="f_nid_no" type="text" class="form-control" name="f_nid_no">
                                </div>  
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="f_prof" class="form-label">পিতার পেশা</label><svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
                                        <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
                                      </svg>
                                    <input id="f_prof" type="text" class="form-control @error('f_prof') is-invalid @enderror" name="f_prof">

                                    @error('f_prof')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="f_annual_income" class="form-label">বার্ষিক আয়</label>
                                    <input id="f_annual_income" type="text" class="form-control @error('f_annual_income') is-invalid @enderror" name="f_annual_income" value="{{ old('f_income') }}" required autocomplete="father income" autofocus>

                                    @error('f_annual_income')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>  
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="f_workplace" class="form-label">কর্মস্থান</label>
                                    <input id="f_workplace" type="text" class="form-control" name="f_workplace">
                                </div>  
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="m_name_bangla" class="form-label">মাতার নাম(বাংলা)</label>
                                    <input id="m_name_bangla" type="m_name_bangla" class="form-control @error('m_name_bangla') is-invalid @enderror" name="m_name_bangla">

                                    @error('m_name_bangla')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="m_name_english" class="form-label">মাতার নাম(ইংরেজি)</label><svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
  <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
</svg>
                                    <input id="m_name_english" type="text" class="form-control @error('m_name_english') is-invalid @enderror" name="m_name_english" value="{{ old('m_name_english') }}" required autocomplete="mothers name" autofocus>

                                    @error('m_name_english')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>  
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="m_nid_no" class="form-label">মাতার জাতীয় পরিচয় পত্রের নং</label>
                                    <input id="m_nid_no" type="text" class="form-control" name="m_nid_no">
                                </div>  
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="m_prof" class="form-label">মাতার পেশা</label><svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
                                        <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
                                      </svg>
                                    <input id="m_prof" type="text" class="form-control @error('m_prof') is-invalid @enderror" name="m_prof">

                                    @error('m_prof')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="m_annual_income" class="form-label">বার্ষিক আয়</label>
                                    <input id="m_annual_income" type="text" class="form-control @error('m_annual_income') is-invalid @enderror" name="m_annual_income" value="{{ old('m_annual_income') }}" required autocomplete="mother income" autofocus>

                                    @error('m_annual_income')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>  
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="m_workplace" class="form-label">কর্মস্থান(কর্মজীবি হলে)</label>
                                    <input id="m_workplace" type="text" class="form-control" name="m_workplace">
                                </div>  
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="birth_date" class="form-label">জন্ম তারিখ</label><svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
                                        <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
                                      </svg>
                                    <input id="birth_date" type="text" class="form-control @error('birth_date') is-invalid @enderror" name="birth_date">

                                    @error('birth_date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="birth_cert_no" class="form-label">জন্ম নিবন্ধন নং</label>
                                    <input id="birth_cert_no" type="text" class="form-control @error('birth_cert_no') is-invalid @enderror" name="birth_cert_no" value="{{ old('birth_cert_no') }}" required autocomplete="Birth registration no" autofocus>

                                    @error('birth_cert_no')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>  
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="nationality" class="form-label">জাতীয়তা</label>
                                    <input id="nationality" type="text" class="form-control" name="nationality">
                                </div>  
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="gender" class="form-label">লিঙ্গ</label><svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
                                        <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
                                      </svg>
                                      <select class="form-control" aria-label="Defaul" name="gender">
                                        <option selected value="">Select Gender</option>
                                        <option value="male" name = "male">Male</option>
                                        <option value="female" name = "female">Female</option>
                                        <option value="other" name = "other">Other</option>
                                    </select>
                                    @error('gender')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="religion" class="form-label">ধর্ম</label><svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
                                        <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
                                      </svg>
                                      <select class="form-control" aria-label="Defaul" name="religion">
                                        <option selected value="">Select Religion</option>
                                        <option value="islam" name = "islam">Islam</option>
                                        <option value="hindu" name = "hindu">Hindu</option>
                                        <option value="buddhist" name = "buddhist">Buddhist</option>
                                        <option value="christian" name = "christian">Christian</option>
                                    </select>

                                    @error('religion')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>  
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="blood_group" class="form-label">রক্তের গ্রুপ</label>
                                    <input id="blood_group" type="text" class="form-control" name="blood_group">
                                </div>  
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="present_address" class="form-label">বর্তমান ঠিকানা(বাড়ির নাম, গ্রাম, পোস্ট অফিস)</label><svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
  <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
</svg>
                                    <input id="present_address" type="text" class="form-control" name="present_address" required>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="pr_address_thana" class="form-label">থানা/উপজেলা</label><svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
  <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
</svg>
                                    <input id="pr_address_thana" type="text" class="form-control" name="pr_address_thana" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="pr_address_subdist" class="form-label">জেলা</label><svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
  <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
</svg>
            <input id="pr_address_subdist" type="text" class="form-control" name="pr_address_subdist" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="pr_address_dist" class="form-label">বিভাগ</label>
                                    <input id="pr_address_dist" type="text" class="form-control" name="pr_address_dist" required>
                                </div>
                            </div>
                            
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="permnanent_address" class="form-label">স্থায়ী ঠিকানা(বাড়ির নাম, গ্রাম, পোস্ট অফিস)</label><svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
  <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
</svg>
                                    <input id="permnanent_address" type="text" class="form-control" name="permnanent_address" required>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="perm_address_thana" class="form-label">থানা/উপজেলা</label><svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
  <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
</svg>
                                    <input id="perm_address_thana" type="text" class="form-control" name="perm_address_thana" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="perm_address_subdist" class="form-label">জেলা</label><svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
  <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
</svg>
<input id="perm_address_subdist" type="text" class="form-control" name="perm_address_subdist" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="perm_address_dist" class="form-label">বিভাগ</label>
                                    <input id="perm_address_dist" type="text" class="form-control" name="perm_address_dist" required>
                                </div>
                            </div>
                            
                        </div>
                        
                        <h3>একাডেমিক তথ্যঃ</h3>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="session_year" class="form-label">বছর/সেশন</label><svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
                                        <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
                                      </svg>
                                    <input id="session_year" type="text" class="form-control @error('session_year') is-invalid @enderror" name="session_year">

                                    @error('session_year')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="class_to_admit" class="form-label">যে শ্রেণিতে ভর্তি হতে ইচ্ছুক</label>
                                    <input id="class_to_admit" type="text" class="form-control @error('class_to_admit') is-invalid @enderror" name="class_to_admit" value="{{ old('class_to_admit') }}" required autocomplete="Desired class to admit" autofocus>

                                    @error('class_to_admit')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>  
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="prev_school" class="form-label">পূর্ববর্তী বিদ্যালয়ের নাম ও ঠিকানা</label>
                                    <input id="prev_school" type="text" class="form-control" name="prev_school">
                                </div>  
                            </div>
                        </div>

                        <h3>কোটা/ক্যাটাগরীর তথ্যঃ</h3>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="category_id" class="form-label">ক্যাটাগরী</label><svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
  <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
</svg>
                                    <select class="form-control" id="mySelectBox" aria-label="Defaul" name="category">
                                        <option selected value="">Choose</option>
                                        <option value="first" name = "parent_working_here">ইস্টার্ণ রিফাইনারীতে কর্মরত অভিভাবক</option>
                                        <option value="second" name = "freedomfighter">মুক্তিযোদ্ধা কোটা</option>
                                        <option value="third" name = "autism">প্রতিবন্ধী কোটা</option>
                                    </select>
                                </div>
                            </div>
                            
                        <div id="register_table">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="parent_working_here_name" class="form-label">নাম</label>
                                        <input id="parent_working_here_name" type="text" class="form-control" name="parent_working_here_name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="parent_working_here_dept" class="form-label">কর্মরত শাখা</label>
                                        <input id="parent_working_here_dept" type="text" class="form-control" name="parent_working_here_dept">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="parent_working_here_pay_code" class="form-label">পে-কোড</label>
                                        <input id="parent_working_here_pay_code" type="text" class="form-control" name="parent_working_here_pay_code">
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <div id="register_table_2">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="freedomfighter_name" class="form-label">মুক্তিযোদ্ধার নাম</label>
                                        <input id="freedomfighter_name" type="text" class="form-control" name="freedomfighter_name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="ff_relation" class="form-label">সম্পর্ক</label>
                                        <input id="ff_relation" type="text" class="form-control" name="ff_relation">
                                    </div>
                                </div>
                                
                                <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="ff_certificate" class="form-label">সংযুক্ত(প্রমাণ পত্র হিসেবে সার্টিফিকেট সমূহের সত্যায়িত কপি আপলোড করুন)</label><svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
    <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
    </svg>
                                    <input id="ff_certificate" type="file" class="form-control" name="ff_certificate">
                                </div>
                            </div>
                            </div>
                        </div>

                        <div id="register_table_3">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="mb-3">
                                        <label for="autism_certificate" class="form-label">প্রমাণ পত্র</label><svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
        <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
        </svg>
                                        <input id="autism_certificate" type="file" class="form-control" name="autism_certificate">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div>বিদ্যালয়ে কর্মরত শিক্ষক/কর্মচারী/ ম্যানেজিং কমিটির সদস্যের সন্তান কি না? &nbsp; &nbsp;
                                    <label>
                                        <input type="radio" name="yes" 
                                               value="yes"> হ্যাঁ</label>
                                    <label>
                                        <label>
                                            <input type="radio" name="no" 
                                                   value="no"> না</label>
                                        <label>
                                
                            </div>
                            <div class = "selectt yes">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="school_empl_name" class="form-label">নাম</label>
                                            <input id="school_empl_name" type="text" class="form-control" name="school_empl_name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="school_empl_dept" class="form-label">কর্মরত শাখা</label>
                                            <input id="school_empl_dept" type="text" class="form-control" name="school_empl_dept">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="school_empl_pay_code" class="form-label">পে-কোড</label>
                                            <input id="school_empl_pay_code" type="text" class="form-control" name="school_empl_pay_code">
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <div>আবেদনকারীর সহোদর/সহোদরা বা জমজ ভাই/বোন অত্র বিদ্যালয়ে অধ্যয়ণ করে কি না? &nbsp; &nbsp;	
                                <label>
                                    <input type="radio" name="yesagain" 
                                           value="yesagain"> হ্যাঁ</label>
                                <label>
                                    <label>
                                        <input type="radio" name="noagain" 
                                               value="noagain"> না</label>
                                    <label>
                            
                        </div>
                        <div class = "anotherselectt yesagain">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="sibling_name" class="form-label">নাম</label>
                                        <input id="sibling_name" type="text" class="form-control" name="sibling_name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="sibling_class" class="form-label">শ্রেনী</label>
                                        <input id="sibling_class" type="text" class="form-control" name="sibling_class">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="sibling_roll" class="form-label">রোল নং</label>
                                        <input id="sibling_roll" type="text" class="form-control" name="sibling_roll">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <br/>
                        <br/>
                        <h3>সংযুক্ত ফাইল</h3>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="img" class="form-label">শিক্ষার্থীর ছবি </label><svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
                                        <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
                                      </svg>
                                      <input id="img" type="file" class="form-control" name="photo">    
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="birth_certificate" class="form-label">জন্ম নিবন্ধন </label><svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
                                        <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
                                      </svg>
                                      <input id="birth_certificate" type="file" class="form-control" name="birth_certificate">
                                </div>  
                            </div>
                            <div class="col-md-4">
                                <label for="father_nid" class="form-label">পিতার জাতীয় পরিচয় পত্র</label><svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" fill="currentColor" class="bi bi-asterisk" viewBox="0 0 16 16">
                                    <path d="M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1z"/>
                                  </svg>
                                  <input id="father_nid" type="file" class="form-control" name="father_nid">
                            </div>
                            <div class="col-md-4">
                                <label for="mother_nid" class="form-label">মাতার জাতীয় পরিচয় পত্র</label>
                                  <input id="mother_nid" type="file" class="form-control" name="mother_nid">
                            </div>
                            
                        </div>
                        
                        <br/>
                        <br/>
                        
                            <label>
                                <input type="radio" name="colorRadio" 
                                       value="agreement"> আমি, এতদ্বারা ঘোষণা করছি যে, উপরে উল্লিখিত তথ্য ও ছবি সঠিক। আমার দ্বারা প্রদত্ত কোন তথ্য মিথ্যা প্রমাণিত হলে, ইনস্টিটিউট আমার ভর্তি বাতিল করার অধিকার সংরক্ষণ করে। আমি ইনস্টিটিউটের নিয়মকানুন মেনে চলার পাশাপাশি প্রয়োজনীয় সমস্ত ফি দিতে বাধ্য থাকব।			
			
                                    </label>
                            <label>
                        
                        
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                
                                <button type="submit" class="btn btn-primary">
                                    Go Payment
                                </button>
                            </div>
                        </div>
                    </form>
    </div>
</div>

<style>
    .log{
        padding-top: 30px;
        padding-bottom: 30px;
    }
    #register_table{
        display: none;
    }
    #register_table_2{
        display: none;
    }
    #register_table_3{
        display: none;
    }
    #status{
        display: none;
    }
    .selectt{
        display:none;
    }
    .anotherselectt{
        display:none;
    }
    .bi.bi-asterisk {
  color: #ff0202;
  margin-left: 8px;
  margin-top: -5px;
}
.pay input {
  pointer-events: none;
}

.ad-hd {
    padding: 10px;
    border-radius: 0px;
    text-align: center;
    background-color: #f1fde3;
}
</style>
@endsection
