@extends('layouts.frontend.app')

@section('title')
Courses |  LGA School
@endsection

@section('content')
  
 <!--Page View-->
 <section class="page-view">
      <section class="page-view-overlay">
        <div class="container">
          <div class="row page-view-row justify-content-between">
            <div class="page-view-text">
            <h2>Courses</h2>
          </div>
          <div class="about-links">
            Senior-School <i class="fa fa-angle-right px-2" aria-hidden="true"></i> <span>Courses</span>
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
         
               <h3>Science Stream</h3>
               <table class="table table-bordered">
               <thead class="bg-theme text-light">
    <tr>
      <th scope="col">Grade XI</th>
      <th scope="col">Grade XII</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>English</td>
      <td>English</td>
    </tr>
    <tr>
      <td>Nepali</td>
      <td>Nepali</td>
    </tr>
    <tr>
      <td>Social Studies</td>
      <td>Life Skill Education</td>
    </tr>
    <tr>
      <td>Physics</td>
      <td>Physics</td>
    </tr>
    <tr>
      <td>Chemistry</td>
      <td>Chemistry</td>
    </tr>
    <tr>
      <td>Biology/Matdematics</td>
      <td>Biology/Mathematics</td>
    </tr>
  </tbody>
</table>
<h3>Management Stream</h3>
               <table class="table table-bordered">
  <thead class="bg-theme text-light">
    <tr>
      <th scope="col">Grade XI</th>
      <th scope="col">Grade XII</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>English</td>
      <td>English</td>
    </tr>
    <tr>
      <td>Nepali</td>
      <td>Nepali</td>
    </tr>
    <tr>
      <td>Social Studies</td>
      <td>Life Skill Education</td>
    </tr>
    <tr>
      <td>Principle of Accounting</td>
      <td>Principle of Accounting</td>
    </tr>

    <tr>
      <td>Economics/T.M. Studies/Computer</td>
      <td>Economics/T.M. Studies/Computer</td>
    </tr>
    <tr>
      <td>Busi. Studies/Finance/HM/B.Math</td>
      <td>Busi. Studies/Finance/HM/B.Math</td>
    </tr>
  </tbody>
</table>
<h3>Humanities Stream</h3>
               <table class="table table-bordered">
  <thead class="bg-theme text-light">
    <tr>
      <th scope="col">Grade XI</th>
      <th scope="col">Grade XII</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>English</td>
      <td>English</td>
    </tr>
    <tr>
      <td>Nepali</td>
      <td>Nepali</td>
    </tr>
    <tr>
      <td>Social Studies</td>
      <td>Life Skill Education</td>
    </tr>
    <tr>
      <td>Rural Development/Painting</td>
      <td>Rural Development/Painting</td>
    </tr>
    <tr>
      <td>Sociology</td>
      <td>Sociology</td>
    </tr>
    <tr>
      <td>Mass Com./Major English</td>
      <td>Mass Com./Major English</td>
    </tr>

  </tbody>
</table>
<h3>Law Stream</h3>
               <table class="table table-bordered">
  <thead class="bg-theme text-light">
    <tr>
      <th scope="col">Grade XI</th>
      <th scope="col">Grade XII</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>English</td>
      <td>English</td>
    </tr>
    <tr>
      <td>Nepali</td>
      <td>Nepali</td>
    </tr>
    <tr>
      <td>Social Studies</td>
      <td>Life Skill Education</td>
    </tr>
    <tr>
      <td>Jurisprudence & Legal Theory</td>
      <td>Nepalese Legal System</td>
    </tr>
    <tr>
      <td>Procedural Law</td>
      <td>Legal Draft</td>
    </tr>
    <tr>
      <td>Constutional Law</td>
      <td>Civil & Criminal Law</td>
    </tr>

  </tbody>
</table>
            
   
              </div>
              <!--End Admission Page-->


          </div>
       @include('frontend.partials.sidebar')
        </div>
      </div>

    </section>
 <!--End Main Facilities-->
@endsection
 
 
 
