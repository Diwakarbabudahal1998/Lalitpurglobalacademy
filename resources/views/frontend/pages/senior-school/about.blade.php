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
            Home <i class="fa fa-angle-right px-2" aria-hidden="true"></i> <span>Senior School</span>
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
                      <h3>Discover Senior-School</h3>
                      <p>Omega senior school offers programs for grade XI and XII in Science, Management, Humanities, and
Law stream. Senior school prepares students for specialized courses through its extensive entrance
preparation classes.<br><br>
Senior school students can experience campus life along with the school life. Our morning shift and day
shift classes offer great choice of timing for the regular classes. Students can identify their time of active
mind for the concentrated studies and based on it they can choose the shift as per their convenience.
The 50 minutes classes, interactive ICT boards, and very practical based demonstrations delivered by
experienced teachers help students to understand much better. The attendance taken through face
scanner provides accuracy on punctuality helps to maintain discipline among all the students as well as
teachers. E-library or digital library provides hundreds of e-books, e-notes, and e-video tutorial classes
which adds another beauty in the learning process.<br><br>
The different sports club provides opportunity to explore inherent talents beyond classrooms. Omega
Basketball club, Cricket Club is already performing well and with the addition of Futsal at the premises of
senior block provide additional opportunity to form Omega Futsal Club. Besides, public speaking
competitions, quiz contests, debate competitions, singing competitions, dancing competitions, motivation
classes, Yoga classes, public speaking classes, online support classes and extra tutorial classes help
everyone to grow personally and become a globally competent citizen.
                      </p>
                    
                        <img src="{{asset('assets/img/about_page/senior-school.jpg')}}" class="img-fluid w-100"/>
                      
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