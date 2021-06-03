@extends('layouts.frontend.app')

@section('title')
Awards |  LGA School
@endsection

@section('content')
  
 <!--Page View-->
 <section class="page-view">
      <section class="page-view-overlay">
        <div class="container">
          <div class="row page-view-row justify-content-between">
            <div class="page-view-text">
            <h2>Awards</h2>
          </div>
          <div class="about-links">
            Middle-School <i class="fa fa-angle-right px-2" aria-hidden="true"></i> <span>Awards</span>
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
                <h3>Awards</h3>
                  <p>Omega have an award system build on the foundations of acknowledging and rejoicing in the
growth of the whole child. </p>
                <hr><h3>Awards Category</h3>

                <div class="admission-criteria">
                <ul >
                    <li><i class="far fa-check-square px-2"></i>Personal Learning Award</li>
                    <li><i class="far fa-check-square px-2"></i>Sports Award</li>
                    <li><i class="far fa-check-square px-2"></i>Character Award</li>
                    <li><i class="far fa-check-square px-2"></i>Leadership Award</li>
                    <li><i class="far fa-check-square px-2"></i>Academic Award.</li>
                  </ul>
              </div>
      
              </div>
              <!--End Admission Page-->


          </div>
       @include('frontend.partials.sidebar')
        </div>
      </div>

    </section>
 <!--End Main Facilities-->
@endsection
 
 
 
