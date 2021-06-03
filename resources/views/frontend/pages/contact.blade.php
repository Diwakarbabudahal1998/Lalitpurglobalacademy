@extends('layouts.frontend.app')

@section('title')
Contact Us | LGA School
@endsection

@section('content')
<!--Page View-->
<section class="page-view">
  <section class="page-view-overlay">
    <div class="container">
      <div class="row page-view-row justify-content-between">
        <div class="page-view-text">
          <h2>Contact Us</h2>
        </div>
        <div class="about-links">
          Home <i class="fa fa-angle-right px-2" aria-hidden="true"></i> <span>Contact Us</span>
        </div>
      </div>

    </div>
  </section>
</section>
<!--End Page View-->

<!--Contact Page-->
<section class="contact">
  <div class="container mt-5">

    <div class="row pt-1">
      <div class="col-md-6">
        @include('flash-message')

        <form action="/contact" method="post">
          @csrf
          <input class="form-control" name="name" placeholder="Name..." type="text" required /><br />
          <input class="form-control" name="phone" placeholder="Phone..." type="tel" required /><br />
          <input class="form-control" name="email" placeholder="E-mail..." type="email" required /><br />
          <textarea class="form-control" name="message" placeholder="How can we help you?" required style="height:150px;"></textarea><br />
          <input class="btn btn-primary contact-btn" type="submit" value="Submit" /><br /><br />
        </form>
      </div>
      <div class="col-md-6">
        <section class="map">
          <div class="map-responsive">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.9553701829227!2d85.34626221540293!3d27.656852482812827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb17565e3a3ed3%3A0x950a51674021ef13!2sGlobal%20Academy%20Secondary%20School!5e0!3m2!1sen!2sin!4v1622651626242!5m2!1sen!2sin"  width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </section>

      </div>
    </div>

    <div class="row  contact-numbers">
      <div class=" col-lg-4 col-md-12 col-sm-12 col-xs-12 mt-5">


      </div>
      <div class=" col-lg-4  col-md-12  col-sm-12 col-xs-12 mt-5">








      </div>
      <div class=" col-lg-4 col-md-12 col-sm-12 col-xs-12 mt-5">
        <b>Contact Us</b> <br />
        <div class="my-2"><i class="fa fa-phone pr-2"></i>01-5201144 </div>
        <div> <i class="fa fa-envelope pr-2"></i>lga2063@gmail.com<br /></div>
        <div class="row ">
          <div class="col-md-12">

            <ul class="list-inline text-white">
              <li class="text-dark mt-5 mb-3 connected-heading">Get Connected with Us on:</li>

              <li class="list-inline-item  text-white"><a href="https://www.facebook.com/Lalitpur-Global-Academy-Secondary-School-1456861554606254" target="_blank" class="social-link rounded py-2 px-4 my-2 social-facebook"><i class="fab fa-facebook fa-fw  text-white"></i></a></li>
             
              <li class="list-inline-item"><a href="mailto:lga2063@gmail.com" class="social-link rounded py-2 px-4 my-2 social-google-plus"><i class="fab fa-google fa-fw  text-white"></i></a></li>

            </ul>
          </div>

        </div>
      </div>
      <!-- <div class="row ">
        <div class="col-md-12 align-right">

          <ul class="list-inline text-white">
            <li class="text-dark mt-5 mb-3 connected-heading">Get Connected with Us on:</li>

            <li class="list-inline-item"><a href="https://www.facebook.com/OmegaInternational/" target="_blank" class="social-link rounded py-2 px-4 my-2 social-facebook"><i class="fab fa-facebook fa-fw"></i></a></li>
            <li class="list-inline-item mr-2"><a href="https://www.youtube.com/channel/UCbjmeN-ODDSiTlGAcm2Vl2A" target="_blank" class="social-link rounded py-2 px-4 my-2 social-youtube"><i class="fab fa-youtube fa-fw"> </i></a></li>
            <li class="list-inline-item"><a href="mailto:admin@omegaschool.edu.np" class="social-link rounded py-2 px-4 my-2 social-google-plus"><i class="fab fa-google fa-fw"></i></a></li>

          </ul>
        </div>




      </div> -->
    </div>
</section>
<!--End Page-->

@endsection