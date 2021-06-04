@extends('layouts.frontend.app')

@section('title')
    Message from Principal | LGA School
@endsection

@section('content')

    <!--Page View-->
    <section class="page-view">
        <section class="page-view-overlay">
            <div class="container">
                <div class="row page-view-row justify-content-between">
                    <div class="page-view-text">
                        <h2>Message from Principal</h2>
                    </div>
                    <div class="about-links">
                        Team-Omega <i class="fa fa-angle-right px-2" aria-hidden="true"></i> <span>Message</span>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!--End Page View-->
    <section class="message">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-5">
                    <img src="{{ asset('assets\img\pri.jpg') }}" class="img-fluid mt-4">
                </div>
                <div class="col-md-7 mt-4">
                    <p>Dear Parents and Students,<br />

                        As Principal I am hugely impressed by the commitment of the school and the staff to the provision of
                        an excellent all-round education for our students in our state of the art facilities. Under my
                        leadership, and as a team working together, we strongly promote academic achievement among our
                        students. The cultural, sporting and other successes of all of our students and staff are also
                        proudly celebrated together.<br/>

                        LGA is an innovative school drawing on the talents and skills of staff, students and parents to
                        provide a host of educational programmes and projects. Wholesome participation is encouraged in the
                        extensive range of extra-curricular activities on offer and care is also taken to ensure the
                        well-being and happiness of each and every student in the school.<br/>

                        With a long and rewarding history of achievement in education behind us, our school community
                        continues to move forward together with confidence, pride and enthusiasm.<br/>

                        Lalitpur Global Academy: "The tradition of excellence is ours; the choice is yours!"<br/>

                        Yours in Education,
                    </p>
                    <div class="message-name ">Chandra Lamichhane Koirala</div>
                    <div class="message-designation ">Principal</div>


                </div>
            </div>
        </div>
    </section>
@endsection
