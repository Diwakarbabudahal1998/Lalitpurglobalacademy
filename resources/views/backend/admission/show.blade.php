@extends('layouts.app')

@section('title')
Showing Admissions | Omega Secondary School
@endsection
@section('content')
@include('layouts.headers.cards')

<div class="container-fluid mt--7">
  <div class="row justify-content-center">

    <div class="col-xl-10 order-xl-1">
      <div class="card bg-secondary shadow">

        <div class="card-body bg-white">
          <h4>Section 1: Student Details</h4>

          <hr>
          <div class="form-row">

            <div class="form-group col-md-4">
              <label>First Name</label>
              <input type="text" value="{{$admission->first_name}}" disabled class="form-control">

            </div>
            <div class="form-group col-md-4">
              <label>Middle Name</label>
              <input type="text" value="{{$admission->middle_name}}" disabled class="form-control ">
            </div>
            <div class="form-group col-md-4">
              <label>Last Name </label>
              <input type="text" value="{{$admission->last_name}}" disabled class="form-control">

            </div>
            <div class="form-group col-md-6">
              <label>Date of Birth </label>
              <input type="date" value="{{$admission->dob}}" disabled class="form-control">

            </div>

            <div class="form-group col-md-6">
              <label>Gender</label>
              <input value="{{$admission->gender}}" disabled class="form-control">

            </div>

            <div class="form-group col-md-6">
              <label>Phone No</label>
              <input value="{{$admission->phone}}" disabled class="form-control">


            </div>



            <div class="form-group col-md-6">
              <label>Email Address</label>
              <input value="{{$admission->email}}" disabled class="form-control">

            </div>
            <div class="form-group col-md-6">
              <label>Photo </label><br>
              <img src="{{asset('/storage/'.$admission->photo)}}" style="height:200px;width:200px;" />

            </div>
          </div>



          <hr>
          <h4>Section 3: Address</h4>
          <hr>
          <h5>Permanent Address</h5>

          <div class="form-row">

            <div class="form-group col-md-4">
              <label>Country </label>
              <input value="{{$admission->country}}" disabled class="form-control">


            </div>
            <div class="form-group col-md-3">
              <label>Province </label>
              <input value="{{$admission->province}}" disabled class="form-control">

            </div>
            <div class="form-group col-md-5">
              <label>District </label>
              <input value="{{$admission->district}}" disabled class="form-control">


            </div>
            <div class="form-group col-md-4">
              <label>Ward No </label>
              <input value="{{$admission->ward_no}}" disabled class="form-control">


            </div>
            <div class="form-group col-md-4">
              <label>Street/Tole </label>
              <input value="{{$admission->street}}" disabled class="form-control">

            </div>
          </div>

          <h5>Temporary Address</h5>

          <div class="form-row">

            <div class="form-group col-md-4">
              <label>Country </label>
              <input value="{{$admission->t_country}}" disabled class="form-control">


            </div>
            <div class="form-group col-md-3">
              <label>Province </label>
              <input value="{{$admission->province}}" disabled class="form-control">


            </div>
            <div class="form-group col-md-5">
              <label>District </label>
              <input value="{{$admission->district}}" disabled class="form-control">


            </div>
            <div class="form-group col-md-4">
              <label>Ward No </label>
              <input value="{{$admission->t_ward_no}}" disabled class="form-control">


            </div>
            <div class="form-group col-md-4">
              <label>Street/Tole </label>
              <input value="{{$admission->t_street}}" disabled class="form-control">


            </div>
          </div>
          <hr>


          <h4>Section 6: Hostel</h4>

          <hr>

          <label>Do you need hostel accomodation facility?</label>
          <input value="{{$admission->hostel }}" disabled class="form-control">




          <hr>
          <h4>Section 7: Transportation<span> ( Please Tick [✓] )</h4>

          <hr>
          <label>Do you need transportation facility?</label>

          <input value="{{$admission->transportation }}" disabled class="form-control">





          <hr>
          <h4>Section 8: Parents/ Guardian</h4>
          <hr>

          <div class="form-row">

            <div class="form-group col-md-4">
              <label><b>Fathers's Name</b> </label>
              <input value="{{$admission->father_name }}" disabled class="form-control">


            </div>
            <div class="form-group col-md-3">
              <label>Occupation </label>
              <input value="{{$admission->father_occupation }}" disabled class="form-control">

            </div>
            <div class="form-group col-md-5">
              <label>Email</label>
              <input value="{{$admission->father_email }}" disabled class="form-control">
            </div>
            <div class="form-group col-md-4">
              <label>Mobile</label>
              <input value="{{$admission->father_mobile }}" disabled class="form-control">

            </div>
            <div class="form-group col-md-4">
              <label>Phone</label>
              <input value="{{$admission->father_phone }}" disabled class="form-control">
            </div>
          </div>



          <div class="form-row">

            <div class="form-group col-md-4">
              <label><b>Mothers's Name</b> </label>
              <input value="{{$admission->mother_name }}" disabled class="form-control">


            </div>
            <div class="form-group col-md-3">
              <label>Occupation </label>
              <input value="{{$admission->mother_occupation }}" disabled class="form-control">


            </div>
            <div class="form-group col-md-5">
              <label>Email</label>
              <input value="{{$admission->mother_email }}" disabled class="form-control">
            </div>
            <div class="form-group col-md-4">
              <label>Mobile</label>
              <input value="{{$admission->mother_mobile }}" disabled class="form-control">

            </div>
            <div class="form-group col-md-4">
              <label>Phone</label>
              <input value="{{$admission->mother_phone }}" disabled class="form-control">
            </div>
          </div>





        </div>
      </div>
    </div>
  </div>

</div>

@endsection

@push('js')
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush