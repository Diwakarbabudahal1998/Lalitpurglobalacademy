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
            Home <i class="fa fa-angle-right px-2" aria-hidden="true"></i> <span>Pre School</span>
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
                      <h3>Discover Pre-School</h3>
                      <p>Omega preschool is a junior wing which runs classes for Play Group, Nursery, LKG, UKG, One, Two, and
Three grade students. It resides in separate block to maintain the safety of the junior students. It is an
early childhood program in which children combine learning with play by trained and experienced
teachers.<br><br>
The academic activities and extra-curricular activities are the result of mix-up of Montessori and traditional
approach to boost curricular knowledge along with the confidence.
                      </p>
                    
                        <img src="{{asset('assets/img/about_page/pre-school.jpg')}}" class="img-fluid w-100"/>
                      
                    </div>
                 
                
                    
                  
                  </div>
                  <div class="row about-page-contents">
                    <div class="col-md-4">
                  

                    </div>
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