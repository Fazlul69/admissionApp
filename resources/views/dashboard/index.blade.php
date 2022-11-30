@extends('dashhome')
     
@section('content')

<div id="sponsor">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="mb-25">
                    <a href="#">Applicant Information</a> 
                   
                </h2>
            </div>
        </div>
        <div class="row">
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            
            <table style= "border: 1px solid black; border-collapse: collapse; margin-left:5px; margin-top:50px;" class="table table-bordered" >
                <tr>
                    <th>রেজিস্ট্রেশন আইডি</th>
                    <th>নাম</th>
                    <th>পিতার নাম</th>
                    <th>মাতার নাম</th>
                    <th>পিতার পেশা</th>
                    <th>মাতার পেশা</th>
                    <th>বার্ষিক আয়</th>
                    <th>কর্মস্থান</th>
                    <th>জন্ম তারিখ</th>
                    <th>জন্ম নিবন্ধন নং</th>
                    <th>জাতীয়তা</th>
                    <th>লিঙ্গ</th>
                    <th>ধর্ম</th>
                    <th>রক্তের গ্রুপ</th>
                    <th>বর্তমান ঠিকানা</th>
                    <th>স্থায়ী ঠিকানা</th>
                    <th width="280px">Action</th>
                    
                    <th width="280px">Action</th>
                </tr>
                @foreach ($infos as $info)
                <tr>
                    <td>{{ $info->reg_id}}</td>
                    <td>{{ $info->name_bangla }}</td>
                    <td>{{ $info->f_name_bangla }}</td>
                    <td>{{ $info->m_name_bangla }}</td>
                    <td>{{ $info->f_prof }}</td>
                    <td>{{ $info->m_prof}}</td>
                    <td>{{ $info->f_annual_income }}</td>
                    <td>{{ $info->f_workplace }}</td>
                    <td>{{ $info->birth_date }}</td>
                    <td>{{ $info->birth_cert_no }}</td>
                    <td>{{ $info->nationality }}</td>
                    <td>{{ $info->gender }}</td>
                    <td>{{ $info->religion }}</td>
                    <td>{{ $info->blood_group }}</td>
                    <td>{{ $info->present_address }}</td>
                    <td>{{ $info->permanent_address }}</td>
                    <td>

                        <a href="{{ route('profilepage',$info->id) }}" class="btn btn-info" href="">Show</a>  
                          <form action="" method="POST">
            
                            @csrf
                            @method('DELETE')
                
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

<style>
    #sponsor{
        /* padding-top: 100px; */
    }
    .mb-25{
    line-height: 36px;
    font-size: 24px;
    color: #444 !important;
    font-weight: 600;
    margin-top: 11px;
    }
    .mb-25 a{
        color: #19686d;
    }
    .pull-right {
        float: right;
        padding: 10px 18px !important;
        background-color: #fff;
        border: 2px solid #ddd !important;
        color: #455a64 !important;
        border-radius: 60px !important;
    }
    .pull-right:hover {
        background: #fafafa;
        border: 2px solid #19686d !important;
        color: #19686d !important;
    }
</style>
@endsection