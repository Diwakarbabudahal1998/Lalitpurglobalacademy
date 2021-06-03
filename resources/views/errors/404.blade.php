<style>

.error-main{
    height:60vh;
    
  background-color: #fff;
}
.error-main h1{
  font-weight: bold;
  padding-top:150px;
  color:#752a90;
  font-size: 100px;
  text-shadow: 2px 4px 5px #6E6E6E;
}
.error-main h6{
  color: #42494F;
  font-size:20px;
}
.error-main p{
  color: #9897A0;
  font-size: 14px; 
}
    </style>

@extends('layouts.frontend.app')

@section('title')
Error
@endsection

@section('content')
<div class="container">
      <div class="row text-center">
        <div class="col-lg-6 offset-lg-3 col-sm-6 offset-sm-3 col-12 p-3 error-main">
          <div class="row">
            <div class="col-lg-8 col-12 col-sm-10 offset-lg-2 offset-sm-1">
              <h1 class="m-0">404</h1>
              <hr>
              <h6>Sorry the page you are looking for cannot be found.
</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
