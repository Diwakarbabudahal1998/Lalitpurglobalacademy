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
            Senior-School <i class="fa fa-angle-right px-2" aria-hidden="true"></i> <span>Facilities</span>
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
             <div class="facility-icon"> <span class=" d-flex justify-content-center align-items-center material-icons">biotech</span>
              <h4 class="text-center mt-3">Laboratories</h4></div>
            </div>
            <div class="col-md-9 col-sm-12 col-xs-12">
        <p class="mt-1">The school has well equipped physics, chemistry and biology laboratories to facilitate practical work and preparation
of projects.</p>
            </div>
            
        </div>
        <div class="row facilities-page-contents mt-5">
                <div class="col-md-3 col-sm-12 col-xs-12 m-0 p-0 ">
                 <div class="facility-icon"> <span class=" d-flex justify-content-center align-items-center material-icons">library_books


                </span>
                  <h4 class="text-center mt-3">E-Library</h4></div>
                </div>
                <div class="col-md-9 col-sm-12 col-xs-12">
            <p class="mt-1">Omega e-library or digital library is website that provides online access to digitized audio, video, e-notes, and e-
books. Omega students are provided with the user i.d. and password to access the library valid till their completion of
the academic journey at Omega.</p>
                </div>
            </div>
                  <div class="row facilities-page-contents mt-5">
                      <div class="col-md-3 col-sm-12 col-xs-12 m-0 p-0 ">
                       <div class="facility-icon"> <span class=" d-flex justify-content-center align-items-center material-icons">local_library</span>
                        <h4 class="text-center mt-3">Library</h4></div>
                      </div>
                      <div class="col-md-9 col-sm-12 col-xs-12">
                  <p class="mt-1">Omega library has all the essential text books and reference books supported by separate reading room where
students can enjoy reading. All the students are provided membership of the library to facilitate learning.</p>
                      </div>
                  </div>
               
                  <div class="row facilities-page-contents mt-5">
                    <div class="col-md-3 col-sm-12 col-xs-12 m-0 p-0 ">
                     <div class="facility-icon"> <span class=" d-flex justify-content-center align-items-center material-icons">sports_handball</span>
                      <h4 class="text-center mt-3">Sports</h4></div>
                    </div>
                    <div class="col-md-9 col-sm-12 col-xs-12">
                <p class="mt-1"><b>&quot;A healthy mind resides in a healthy body&quot;</b><br>
We believe that overall fitness of body and mind depends on physical activity that one performs daily.
Keeping it in mind, we have built a futsal court, basketball court and table tennis court within the school
premises. Moreover, Omega Cricket team is also performing well. The students interested to join Karate
club may also become the member of Omega Karate club.</p>
                    </div>
                </div>
          
            
            <div class="row facilities-page-contents mt-5">
              <div class="col-md-3 col-sm-12 col-xs-12 m-0 p-0 ">
               <div class="facility-icon"> <span class=" d-flex justify-content-center align-items-center material-icons">meeting_room</span>
                <h4 class="text-center mt-3">Auditorium</h4></div>
              </div>
              <div class="col-md-9 col-sm-12 col-xs-12">
          <p class="mt-1">The school has an auditorium which is built to enable an audience to hear and watch performances
during festivals, celebrations, competitions etc. Various programs such as motivation classes, Yoga
classes, and Public speaking classes are held on regular basis besides other regular programs.</p>
              </div>
          </div>
       
        <div class="row facilities-page-contents mt-5">
          <div class="col-md-3 col-sm-12 col-xs-12 m-0 p-0 ">
           <div class="facility-icon"> <span class=" d-flex justify-content-center align-items-center material-icons">directions_bus</span>
            <h4 class="text-center mt-3">Bus Service</h4></div>
          </div>
          <div class="col-md-9 col-sm-12 col-xs-12">
      <p class="mt-1">Omega provides bus service to various areas. For more information, please contact transportation
department at the school.</p>
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