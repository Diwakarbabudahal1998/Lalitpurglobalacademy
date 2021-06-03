@extends('layouts.frontend.app')

@section('title')
Admission |  LGA School
@endsection

@section('content')
  
 <!--Page View-->
 <section class="page-view">
      <section class="page-view-overlay">
        <div class="container">
          <div class="row page-view-row justify-content-between">
            <div class="page-view-text">
            <h2>Admission</h2>
          </div>
          <div class="about-links">
            Middle-School <i class="fa fa-angle-right px-2" aria-hidden="true"></i> <span>Admission</span>
          </div>
        </div>
        </div>
      </section>
    </section>
    <!--End Page View-->
<!--Start Main Facilities Us-->
    <section class="about-main">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-12">
              <!--Start Admission Page-->
              <div class="admission-page">
                <h3>Eligibility</h3>
                  <p>Proper age group for each grades, Residence distance of the student from school, and
commitment from parents are the main eligibility criteria for the enrollment.</p>
                <hr><h3>Admission Criteria</h3>

                <div class="admission-criteria">
                  
                  <h6><i class="fas fa-angle-right px-3"></i>Age</h6>
                  <p>We accept children of age above than 18 months for Play Group.</p>
                </div>
                <hr><h3>Procedure</h3>
                <div class="admission-criteria">
                  
                  <p>Admission procedure involves students&#39; ability test and parents&#39; interview. Parents&#39;
commitment and consent is sought before the enrollment.</p>
                </div>
                <hr><h3>Required Documents</h3>
               <p class="py-2"> Birth registration certificate issued by ward office, passport sized photograph, Affidavit, and commitment
letter from parents&#39; are required to submit at the time of admission. The list of all documents required are:
                 </p> <ul >
                    <li><i class="far fa-check-square px-2"></i>Admission form</li>
                    <li><i class="far fa-check-square px-2"></i>Grade sheet of final examination</li>
                    <li><i class="far fa-check-square px-2"></i>Affidavit</li>
                    <li><i class="far fa-check-square px-2"></i>Birth certificate</li>
                    <li><i class="far fa-check-square px-2"></i>Xerox of
citizenship of one of the parent</li>
<li><i class="far fa-check-square px-2"></i>Medical certificate (in case of any past medical history)</li>
<li><i class="far fa-check-square px-2"></i>Photographs
of parent and local guardian who is responsible for pick up from the school.</li>


                

                  </ul>
              </div>
              <!--End Admission Page-->


          </div>
       @include('frontend.partials.sidebar')
        </div>
      </div>

    </section>
 <!--End Main Facilities-->
@endsection
 
 
 
