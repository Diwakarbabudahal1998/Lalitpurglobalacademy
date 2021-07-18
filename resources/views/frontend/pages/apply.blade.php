<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @include('frontend.partials.assets.css')
  <link rel="icon" type="image/png" href="{{asset('favicon.ico')}}">
  <title>Application Form</title>
  <style>
    #preloader {
      height: 100vh;
      position: fixed;
      width: 100%;
      background: #fff url("./assets/img/preloader.gif") no-repeat center;
      z-index: 999999;
    }

    .form-error {

      border: 2px solid #e74c3c;
    }
  </style>
</head>

<body onload="loadFunction()">
  <div id="preloader">

  </div>
  <div class="admission-form">
    <div class="container">
      <div class="row justify-content-center">
        <img src="{{asset('assets\img\lga.jpg')}}" class="img-fluid" style="height:150px;">
      </div>
      <div class="row">

        <div class="col-md-12  text-center">
          <h2 class="mt-3 font-weight-bold">Lalitpur Global Academy </h2>
          <h5>Imadol, Lalitpur</h5>
          <h6>Tel: 01-5201144/ 9851103601</h6>
        </div>
      </div>
      <form method="POST" action="/apply" encType="multipart/form-data" class=" mt-3 p-4"
        style="border:1px solid #d5d5d5;">
        <h2 class="text-uppercase font-weight-bold">Application Form for Admission</h2>
        <small>All the field with <span class="text-danger">*</span> are required.</small>
        <hr>
        @csrf
        <h4>Section 1: Student Details</h4>

        <hr>
        <div class="form-row">

          <div class="form-group col-md-4">
            <label>First Name <span class="text-danger">*</span></label>
            <input type="text" name="first_name"
              class="form-control {{($errors->first('first_name') ? " form-error" : "")}}">
            <div class="error text-danger">{{ $errors->first('first_name') }}</div>
          </div>
          <div class="form-group col-md-4">
            <label>Middle Name</label>
            <input type="text" name="middle_name" class="form-control ">
          </div>
          <div class="form-group col-md-4">
            <label>Last Name <span class="text-danger">*</span></label>
            <input type="text" name="last_name"
              class="form-control {{($errors->first('last_name') ? " form-error" : "")}}"">
      <div class=" error text-danger">{{ $errors->first('last_name') }}
          </div>

        </div>
        <div class="form-group col-md-6">
          <label>Date of Birth <span class="text-danger">*</span></label>
          <input type="date" name="dob" class="form-control {{($errors->first('dob') ? " form-error" : "")}}"" >
      <div class=" error text-danger">{{ $errors->first('dob') }}
        </div>

    </div>

    <div class="form-group col-md-6">
      <label>Gender <span class="text-danger">*</span></label>
      <div class="form-control" style="border:none;">
        <div class="form-check form-check-inline">
          <input name="gender" class="form-check-input {{($errors->first('gender') ? " form-error" : "")}}"" type="
            radio" name="inlineRadioOptions" id="inlineRadio1" value="Male">
          <label class="form-check-label" for="inlineRadio1">Male</label>
        </div>
        <div class="form-check form-check-inline">
          <input name="gender" class="form-check-input {{($errors->first('gender') ? " form-error" : "")}}"" type="
            radio" name="inlineRadioOptions" id="inlineRadio2" value="Female">
          <label class="form-check-label" for="inlineRadio2">Female</label>
        </div>
      </div>
      <div class="error text-danger">{{ $errors->first('gender') }}</div>

    </div>

    <div class="form-group col-md-6">
      <label>Phone No <span class="text-danger">*</span></label>
      <input type="number" min="0" name="phone" class="form-control {{($errors->first('phone') ? " form-error" : "")}}"">
      <div class=" error text-danger">{{ $errors->first('phone') }}
    </div>

  </div>



  <div class="form-group col-md-6">
    <label>Email Address<span class="text-danger">*</span></label>
    <input type="email" name="email" class="form-control {{($errors->first('email') ? " form-error" : "")}}"" >
      <div class=" error text-danger">{{ $errors->first('email') }}
  </div>

 


  </div>
  </div>
  <hr>
  <h4>Section 2: Previous School Details</h4>
  <hr>
  <div class="form-row">

    <div class="form-group col-md-4">
      <label>Name of the School<span class="text-danger"></span></label>
      <input type="text" name="school_name"
        class="form-control {{($errors->first('school_name') ? " form-error" : "")}}"">
      <div class=" error text-danger">{{ $errors->first('school_name') }}
    </div>

  </div>
  <div class="form-group col-md-4">
    <label>Address<span class="text-danger"></span></label>
    <input type="text" name="school_address"
      class="form-control {{($errors->first('school_address') ? " form-error" : "")}}"">
      <div class=" error text-danger">{{ $errors->first('school_address') }}
  </div>

  </div>
  <div class="form-group col-md-4">
    <label>Phone No.<span class="text-danger"></span></label>
    <input type="number" min="0" name="school_phone"
      class="form-control {{($errors->first('school_phone') ? " form-error" : "")}}"">
      <div class=" error text-danger">{{ $errors->first('school_phone') }}
  </div>

  </div>
  <div class="form-group col-md-4">
    <label>Board<span class="text-danger"></span></label>
    <input type="text" name="school_board"
      class="form-control {{($errors->first('school_board') ? " form-error" : "")}}"">
      <div class=" error text-danger">{{ $errors->first('school_board') }}
  </div>

  </div>
  <div class="form-group col-md-4">
    <label>Passed Year<span class="text-danger"></span></label>
    <input type="number" min="0" class="form-control {{($errors->first('school_passed') ? " form-error" : "")}}"" name="
      school_passed">
    <div class="error text-danger">{{ $errors->first('school_passed') }}</div>

  </div>
  <div class="form-group col-md-4">
    <label>GPA Obtained<span class="text-danger"></span></label>
    <input type="number" min="0" class="form-control {{($errors->first('school_gpa') ? " form-error" : "")}}"" name="
      school_gpa">
    <div class="error text-danger">{{ $errors->first('school_gpa') }}</div>

  </div>
  </div>
  <hr>
  <h4>Section 3: Address</h4>
  <hr>
  <h5>Permanent Address</h5>

  <div class="form-row">

    <div class="form-group col-md-4">
      <label>Country<span class="text-danger">*</span></label>
      <input type="text" name="country" class="form-control {{($errors->first('country') ? " form-error" : "")}}"">
      <div class=" error text-danger">{{ $errors->first('country') }}
    </div>

  </div>
  <div class="form-group col-md-3">
    <label>Province<span class="text-danger">*</span></label>
    <input type="number" min="0" name="province"
      class="form-control {{($errors->first('province') ? " form-error" : "")}}"">
      <div class=" error text-danger">{{ $errors->first('province') }}
  </div>

  </div>
  <div class="form-group col-md-5">
    <label>District<span class="text-danger">*</span></label>
    <input type="text" name="district" class="form-control {{($errors->first('district') ? " form-error" : "")}}"">
      <div class=" error text-danger">{{ $errors->first('district') }}
  </div>

  </div>
  <div class="form-group col-md-4">
    <label>Ward No<span class="text-danger">*</span></label>
    <input type="number" min="0" name="ward_no"
      class="form-control {{($errors->first('ward_no') ? " form-error" : "")}}"">
      <div class=" error text-danger">{{ $errors->first('ward_no') }}
  </div>

  </div>
  <div class="form-group col-md-4">
    <label>Street/Tole<span class="text-danger">*</span></label>
    <input type="text" name="street" class="form-control {{($errors->first('street') ? " form-error" : "")}}"">
      <div class=" error text-danger">{{ $errors->first('street') }}
  </div>

  </div>
  </div>
  <input type="checkbox" class="mx-2" name="present" onclick="permanent(this.form)">Copy Permanent Address

  <h5>Temporary Address</h5>

  <div class="form-row">

    <div class="form-group col-md-4">
      <label>Country<span class="text-danger">*</span></label>
      <input type="text" name="t_country" class="form-control {{($errors->first('t_country') ? " form-error" : "")}}""">
      <div class="error text-danger">{{ $errors->first('t_country') }}</div>

    </div>
    <div class="form-group col-md-3">
      <label>Province<span class="text-danger">*</span></label>
      <input type="number" min="0" name="t_province"
        class="form-control {{($errors->first('t_province') ? " form-error" : "")}}""">
      <div class="error text-danger">{{ $errors->first('t_province') }}</div>

    </div>
    <div class="form-group col-md-5">
      <label>District<span class="text-danger">*</span></label>
      <input type="text" name="t_district" class="form-control {{($errors->first('district') ? " form-error" : "")}}""">
      <div class="error text-danger">{{ $errors->first('t_district') }}</div>

    </div>
    <div class="form-group col-md-4">
      <label>Ward No<span class="text-danger">*</span></label>
      <input type="number" min="0" name="t_ward_no"
        class="form-control {{($errors->first('t_ward_no') ? " form-error" : "")}}""">
      <div class="error text-danger">{{ $errors->first('t_ward_no') }}</div>

    </div>
    <div class="form-group col-md-4">
      <label>Street/Tole<span class="text-danger">*</span></label>
      <input type="text" name="t_street" class="form-control {{($errors->first('t_street') ? " form-error" : "")}}""">
      <div class="error text-danger">{{ $errors->first('t_street') }}</div>

    </div>
  </div>


  <hr>



  <h4>Section 6: Hostel<span> ( Please Tick [✓] )</h4>

  <hr>
  <div class="form-row">

    <div class="form-group col-md-10">
      <label>Do you need hostel accomodation facility?</label>
      <input name="hostel" value="Yes" type="checkbox" class="float-right d-block" name="hostel"
        style="height:20px;width:20px;">
    </div>



  </div>
  <hr>
  <h4>Section 7: Transportation<span> ( Please Tick [✓] )</span></h4>

  <hr>
  <div class="form-row">

    <div class="form-group col-md-10">
      <label>Do you need transportation facility?</label>
      <input name="transportation" value="Yes" type="checkbox" class="float-right d-block" name="transportation"
        style="height:20px;width:20px;">
    </div>



  </div>
  <hr>
  <h4>Section 8: Parents/ Guardian</h4>
  <hr>

  <div class="form-row">

    <div class="form-group col-md-4">
      <label><b>Fathers's Name</b><span class="text-danger">*</span></label>
      <input type="text" name="father_name"
        class="form-control {{($errors->first('father_name') ? " form-error" : "")}}">
      <div class="error text-danger">{{ $errors->first('father_name') }}</div>

    </div>
    <div class="form-group col-md-3">
      <label>Occupation<span class="text-danger">*</span></label>
      <input type="text" name="father_occupation"
        class="form-control {{($errors->first('father_occupation') ? " form-error" : "")}}">
      <div class="error text-danger">{{ $errors->first('father_occupation') }}</div>

    </div>
    <div class="form-group col-md-5">
      <label>Email</label>
      <input type="email" name="father_email" class="form-control">
    </div>
    <div class="form-group col-md-4">
      <label>Mobile</label>
      <input type="number" min="0" name="father_mobile" class="form-control">

    </div>
    <div class="form-group col-md-4">
      <label>Phone</label>
      <input type="number" min="0" name="father_phone" class="form-control">
    </div>
  </div>



  <div class="form-row">

    <div class="form-group col-md-4">
      <label><b>Mothers's Name</b><span class="text-danger">*</span></label>
      <input type="text" name="mother_name"
        class="form-control {{($errors->first('mother_name') ? " form-error" : "")}}">
      <div class="error text-danger">{{ $errors->first('mother_name') }}</div>

    </div>
    <div class="form-group col-md-3">
      <label>Occupation<span class="text-danger">*</span></label>
      <input type="text" name="mother_occupation"
        class="form-control {{($errors->first('mother_occupation') ? " form-error" : "")}}">
      <div class="error text-danger">{{ $errors->first('mother_occupation') }}</div>

    </div>
    <div class="form-group col-md-5">
      <label>Email</label>
      <input type="email" name="mother_email" class="form-control">
    </div>
    <div class="form-group col-md-4">
      <label>Mobile</label>
      <input type="number" min="0" name="mother_mobile" class="form-control">
    </div>
    <div class="form-group col-md-4">
      <label>Phone</label>
      <input type="number" min="0" name="mother_phone" class="form-control">
    </div>
  </div>

  <hr>


  <hr>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" name="agree">
    <label class="form-check-label {{($errors->first('agree') ? " form-error" : "")}}" value="true">I agree that all my
      documents and information submitted with this form are true and correct.</label>
    <div class="error text-danger">{{ $errors->first('agree') }}</div>

  </div>
  <button type="submit" class="btn btn-primary mt-3">Submit</button>

  </form>
  </div>
  </div>
  @include('frontend.partials.assets.js')
</body>
<script>
  function permanent(p) {
    if (p.present.checked == true) {
      p.t_country.value = p.country.value;
      p.t_province.value = p.province.value;
      p.t_street.value = p.street.value;
      p.t_district.value = p.district.value;
      p.t_ward_no.value = p.ward_no.value;
    }
  }
</script>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml: true,
      version: "v7.0",
    });
  };

  (function(d, s, id) {
    var js,
      fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js";
    fjs.parentNode.insertBefore(js, fjs);
  })(document, "script", "facebook-jssdk");
</script>

<!-- Your Chat Plugin code -->
<div class="fb-customerchat" attribution="setup_tool" page_id="673272012686199" theme_color="#752a90"
  logged_in_greeting="Hi! How can we help you?" logged_out_greeting="Hi! How can we help you?"></div>

</html>