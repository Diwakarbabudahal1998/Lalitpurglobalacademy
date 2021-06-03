@extends('layouts.frontend.app')

@section('title')
    Message from Chairperson | LGA School
@endsection

@section('content')

    <!--Page View-->
     <section class="page-view">
        <section class="page-view-overlay">
            <div class="container">
                <div class="row page-view-row justify-content-between">
                    <div class="page-view-text">
                        <h2>Message from Chairperson</h2>
                    </div>
                    <div class="about-links">
                        Team-LGA <i class="fa fa-angle-right px-2" aria-hidden="true"></i> <span>Message</span>
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
                    <img src="{{ asset('assets\img\rk.jpg') }}" class="img-fluid mt-4">
                </div>
                <div class="col-md-7 mt-4">
                    <p>Dear Prospective students,<br>Schools these days are not only meant to attain information and
                        knowledge, rather they are platforms for collaboration of thoughts and ideas. At Lalitpur
                        Global Academy, we believe that the true strength in our classroom lies in collaboration of
                        learners, not in the knowledge of one Expert.Aristotle once said that “Educating the mind without
                        educating the heart is not education”. Even as we impart the education to match the advancement in
                        technology and processes, we guide our children towards right principles, ethics and moral values.We
                        offer our students a stress-free learning environment which encourages creativity and critical
                        thinking. Our unique teaching and learning process with a proper blend of theory and practice
                        crosses the boundaries of nations towards global excellence.
                        <br>Dear Students, it is my message to all of you that you
                        are capable of amazing things. You have only got
                        three choices in life, give up, give in or give it all
                        you’ve got.
                    </p>
                    <div class="message-name ">Ramesh Prasad Koirala</div>
                    <div class="message-designation ">Founder/Chairperson</div>


                </div>
            </div>
        </div>
    </section>
@endsection
