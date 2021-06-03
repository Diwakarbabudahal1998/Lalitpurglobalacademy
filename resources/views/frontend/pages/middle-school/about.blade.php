@extends('layouts.frontend.app')

@section('title')
About Us |  LGA School
@endsection

@section('content')
  <!--Page View-->
  <section class="page-view">
      <section class="page-view-overlay">
        <div class="container">
          <div class="row page-view-row justify-content-between">
            <div class="page-view-text">
            <h2>About Us</h2>
          </div>
          <div class="about-links">
            Home <i class="fa fa-angle-right px-2" aria-hidden="true"></i> <span>Middle School</span>
          </div>
        </div>

        </div>
      </section>
    </section>
    <!--End Page View-->
<!--Start Main About Us-->
    <section class="about-main">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-12">
              <!--Start About Page-->
              <section class="about-page">
                <div class="container-fluid">
                  <div class="row about-page-row">
                    <div class="col-md-12 about-page-text p-0" >
                      <h3>Discover Middle-School</h3>
                      <p>Omega middle school runs classes from grade 4 to grade 10. Our middle school program thoroughly
prepares students for senior school and bridges the gap between childhood and adolescence.<br><br>
We assist students in developing self-esteem with support programs relevant to current concerns for their
age-group. Our middle school is concerned with the academic and personal growth of students in a safe
and supportive environment.<br><br>

Middle school involves engaging and motivating students to do their best and to look for the continual
improvement in the skills needed for the 21 st century. Middle school is the transition stage which aims to
provide students a smooth transition between junior and senior schooling to allow students in developing
their gifted talents.
                      </p>
                    
                        <img src="{{asset('assets/img/about_page/middle-school.jpg')}}" class="img-fluid w-100"/>
                      
                    </div>
                 
                
                    
                  
                  </div>
                
              </section>
              <!--End About Page-->


          </div>
          @include('frontend.partials.sidebar');

        </div>
      </div>

    </section>
 <!--End Main About Us-->

@endsection