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
            Senior-School <i class="fa fa-angle-right px-2" aria-hidden="true"></i> <span>Admission</span>
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
                  <p>Candidates need at least GPA 2.0
( Grade C
+ ) in SEE for applying for
Science Stream while at least GPA
1.6 (Grade D+ ) is needed for
Management and Humanities,
candidates need at least GPA 1.6.
All the candidates fullling these
criteria can ll up application
forms and prepare for the written
test based on the syllabi and
model questions given after the
submission of application form</p>
                <hr><h3>Written Test</h3>

                <p>Candidates need at least GPA 2.0
( Grade C
+ ) in SEE for applying for
Science Stream while at least GPA
1.6 (Grade D+ ) is needed for
Management and Humanities,
candidates need at least GPA 1.6.
All the candidates fullling these
criteria can ll up application
forms and prepare for the written
test based on the syllabi and
model questions given after the
submission of application form</p>
                <hr><h3>Interview</h3>
                <div class="admission-criteria">
                  
                  <p>The successful candidates from
the Written Test need to attend a
formal Interview. The presence of
the Parents/Guardians is a must
during selection interview.
Finally, selected candidates are
given admission offers that
should make confirmation of
their acceptance of admission
within the allocated period.</p>
                </div>
    

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
 
 
 
