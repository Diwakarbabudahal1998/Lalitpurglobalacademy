@extends('layouts.frontend.app')

@section('title')
Facilities |  LGA School
@endsection

@section('content')
  <!--Page View-->
  <section class="page-view">
      <section class="page-view-overlay">
        <div class="container">
          <div class="row page-view-row justify-content-between">
            <div class="page-view-text">
            <h2>Facilities</h2>
          </div>
          <div class="about-links">
            Middle-School <i class="fa fa-angle-right px-2" aria-hidden="true"></i> <span>Facilities</span>
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
              <!--Start Facilities Page-->
              <section class="about-page">
                <div class="container-fluid">
         
                  <div class="row facilities-page-contents mt-5">
                      <div class="col-md-3 col-sm-12 col-xs-12 m-0 p-0 ">
                       <div class="facility-icon"> <span class=" d-flex justify-content-center align-items-center material-icons">fastfood</span>
                        <h4 class="text-center mt-3">Kitchen</h4></div>
                      </div>
                      <div class="col-md-9 col-sm-12 col-xs-12">
                  <p class="mt-1">Omega preschool has its own kitchen which provides hygienic food. Meal is compulsory for all
the students at school. The menu can be available at the time of admission.</p>
                      </div>
                  </div>
               
                  <div class="row facilities-page-contents mt-5">
                    <div class="col-md-3 col-sm-12 col-xs-12 m-0 p-0 ">
                     <div class="facility-icon"> <span class=" d-flex justify-content-center align-items-center material-icons">sports_handball</span>
                      <h4 class="text-center mt-3">Play Area</h4></div>
                    </div>
                    <div class="col-md-9 col-sm-12 col-xs-12">
                <p class="mt-1">A safe play area is available for the students within the school premises.</p>
                    </div>
                </div>
                <div class="row facilities-page-contents mt-5">
                  <div class="col-md-3 col-sm-12 col-xs-12 m-0 p-0 ">
                   <div class="facility-icon"> <span class=" d-flex justify-content-center align-items-center material-icons">computer</span>
                    <h4 class="text-center mt-3">Computer Laboratory</h4></div>
                  </div>
                  <div class="col-md-9 col-sm-12 col-xs-12">
              <p class="mt-1">Preschool is equipped with its own computer laboratory.</p>
                  </div>
              </div>
              <div class="row facilities-page-contents mt-5">
                <div class="col-md-3 col-sm-12 col-xs-12 m-0 p-0 ">
                 <div class="facility-icon"> <span class=" d-flex justify-content-center align-items-center material-icons">library_books
                </span>
                  <h4 class="text-center mt-3">Audio-Visual Room</h4></div>
                </div>
                <div class="col-md-9 col-sm-12 col-xs-12">
            <p class="mt-1">Audio-visual room is set-up for running e-classes as well as video classes.</p>
                </div>
            </div>
            <div class="row facilities-page-contents mt-5">
              <div class="col-md-3 col-sm-12 col-xs-12 m-0 p-0 ">
               <div class="facility-icon"> <span class=" d-flex justify-content-center align-items-center material-icons">meeting_room</span>
                <h4 class="text-center mt-3">Indoor Hall</h4></div>
              </div>
              <div class="col-md-9 col-sm-12 col-xs-12">
          <p class="mt-1">An indoor hall where different programs are held as per the calendar is available.</p>
              </div>
          </div>

        <div class="row facilities-page-contents mt-5">
          <div class="col-md-3 col-sm-12 col-xs-12 m-0 p-0 ">
           <div class="facility-icon"> <span class=" d-flex justify-content-center align-items-center material-icons">apartment</span>
            <h4 class="text-center mt-3">Day Borders</h4></div>
          </div>
          <div class="col-md-9 col-sm-12 col-xs-12">
      <p class="mt-1">Day boarder&#39;s facility is offered as per the request of parents from 8 am to 5 pm.
Transportation: Transportation is available around valley.</p>
          </div>
          
      </div>
      <div class="row facilities-page-contents mt-5">
          <div class="col-md-3 col-sm-12 col-xs-12 m-0 p-0 ">
           <div class="facility-icon"> <span class=" d-flex justify-content-center align-items-center material-icons">school</span>
            <h4 class="text-center mt-3">Other Skills</h4></div>
          </div>
          <div class="col-md-9 col-sm-12 col-xs-12">
      <p class="mt-1">Classes for dance, music, handwriting, karate, art and craft are provided in regular basis.</p>
          </div>
          
      </div>
     
                </div>
              </section>
              <!--End Facilities Page-->


          </div>
          @include('frontend.partials.sidebar');

        </div>
      </div>

    </section>
 <!--End Main Facilities-->

@endsection