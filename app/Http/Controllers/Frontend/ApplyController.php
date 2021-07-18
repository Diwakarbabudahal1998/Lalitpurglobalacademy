<?php

namespace App\Http\Controllers\Frontend;

use App\Admission;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ApplyController extends Controller
{
 /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
 public function index()
 {
  return view('frontend.pages.apply');
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
  $apply = new Admission();
  $this->validate($request, [
   "first_name"        =>
   "required",
   "last_name"         =>
   "required",
   "dob"               =>
   "required",
   "gender"            =>
   "required",
   "phone"             =>
   "required",

   "country"           =>
   "required",
   "province"          =>
   "required",
   "district"          =>
   "required",
   "ward_no"           =>
   "required",
   "street"            =>
   "required",
   "country"           =>
   "required",
   "province"          =>
   "required",
   "district"          =>
   "required",
   "ward_no"           =>
   "required",
   "street"            =>
   "required",
   "t_country"         =>
   "required",
   "t_province"        =>
   "required",
   "t_district"        =>
   "required",
   "t_ward_no"         =>
   "required",
   "t_street"          =>
   "required",

   "father_name"       =>
   "required",
   "father_occupation" =>
   "required",

   "mother_name"       =>
   "required",
   "mother_occupation" =>
   "required",

  ]);
  try {
   $apply->first_name  = $request->first_name;
   $apply->middle_name = $request->middle_name;
   $apply->last_name   = $request->last_name;
   $apply->dob         = $request->dob;
   $apply->gender      = $request->gender;
   $apply->phone       = $request->phone;
   $apply->email       = $request->email;
   //$apply->school_name=$request->email;
   //$apply->school_address=$request->school_address;
   //$apply->school_phone=$request->school_phone;
   // $apply->school_board=$request->school_board;
   // $apply->school_passed=$request->school_passed;
   // $apply->school_gpa=$request->school_gpa;
   $apply->country    = $request->country;
   $apply->province   = $request->province;
   $apply->district   = $request->district;
   $apply->ward_no    = $request->ward_no;
   $apply->street     = $request->street;
   $apply->t_country  = $request->t_country;
   $apply->t_province = $request->t_province;
   $apply->t_district = $request->t_district;
   $apply->t_ward_no  = $request->t_ward_no;
   $apply->t_street   = $request->t_street;
   //$apply->shift=$request->shift;
   //$apply->stream=$request->stream;
   $apply->hostel            = $request->hostel;
   $apply->transportation    = $request->transportation;
   $apply->father_name       = $request->father_name;
   $apply->father_occupation = $request->father_occupation;
   $apply->father_email      = $request->father_email;
   $apply->father_mobile     = $request->father_mobile;
   $apply->father_phone      = $request->father_phone;
   $apply->mother_name       = $request->mother_name;
   $apply->mother_occupation = $request->mother_occupation;
   $apply->mother_email      = $request->mother_email;
   $apply->mother_mobile     = $request->mother_mobile;
   $apply->mother_phone      = $request->mother_phone;

   if ($apply->save()) {
    return redirect()->back();
   }

  } catch (\Exception $e) {
   return view('errors/404');
  }
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
