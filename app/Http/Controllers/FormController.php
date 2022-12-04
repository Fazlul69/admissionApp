<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormInfo;
use App\Models\Category;
use PDF;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admission-form', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name_bangla' => 'required',
            'name_english' => 'required',
            'mobile_no' => 'required',
            'f_name_bangla' => 'required',
            'f_name_english' => 'required',
            'f_nid_no' => 'required',
            'f_prof' => 'required',
            'f_annual_income' => 'nullable',
            'f_workplace' => 'nullable',
            'm_name_bangla' => 'required',
            'm_name_english' => 'required',
            'm_nid_no' => 'required',
            'm_prof' => 'nullable',
            'm_annual_income' =>'nullable',
            'birth_date' =>'required',
            'birth_cert_no' =>'required',
            'religion' => 'nullable',
            'nationality' => 'required',
            'blood_group' =>'nullable',
            'present_address' => 'required',
            'pr_address_thana' =>'required', 
            'pr_address_subdist'=>'required',
            'pr_address_dist' => 'required', 
            'permnanent_address'=>'required',
            'perm_address_thana'=> 'required',
            'perm_address_subdist'=>'required',
            'perm_address_dist' =>'required',
            'photo' =>'required',
            'birth_certificate' =>'required',
            'father_nid' =>'required',
            'mother_nid' => 'nullable',
            'prev_school'=> 'nullable',
        ]);
        
        $input = $request->all();
        
        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/participent/',$filename);
            $input['photo'] = $filename;
        }else{
            $input['photo'] = '';
        }

        if($request->hasFile('birth_certificate')){
            $file = $request->file('birth_certificate');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('files/participent/',$filename);
            $input['birth_certificate'] = $filename;
        }else{
            $input['birth_certificate'] = '';
        }
        if($request->hasFile('father_nid')){
            $file = $request->file('father_nid');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('files/participent/',$filename);
            $input['father_nid'] = $filename;
        }else{
            $input['father_nid'] = '';
        }

        if($request->hasFile('mother_nid')){
            $file = $request->file('mother_nid');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('files/participent/',$filename);
            $input['mother_nid'] = $filename;
        }else{
            $input['mother_nid'] = '';
        }

        if($request->hasFile('autism_certificate')){
            $file = $request->file('autism_certificate');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('files/participent/',$filename);
            $input['autism_certificate'] = $filename;
        }else{
            $input['autism_certificate'] = '';
        }

        if($request->hasFile('ff_certificate')){
            $file = $request->file('ff_certificate');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('files/participent/',$filename);
            $input['ff_certificate'] = $filename;
        }else{
            $input['ff_certificate'] = '';
        }
        
        $input['reg_id'] = $request->reg_id;
        
        FormInfo::create($input);
        return view('download-pdf', compact('input'));

        
    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
