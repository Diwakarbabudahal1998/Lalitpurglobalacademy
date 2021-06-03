@extends('layouts.app')

@section('title')
Public Library | Omega Secondary School
@endsection
@section('content')
    @include('layouts.headers.cards')
 
    <div class="container-fluid mt--7">
   <div class="row justify-content-center">
       <div class="col-xl-12 mb-xl-0">
       @include('flash-message')

           <div class="card shadow">
               <div class="card-header border-0">
                   <div class="row align-items-center">
                       <div class="col">
                           <h3 class="mb-0">Public Library</h3>
                       </div>
                     
                   
                   </div>
                   <div class="row pt-2">
                       <div class="col-md-6">
                           @if (session('status'))
                               <div class="alert alert-success alert-dismissible fade show" role="alert">
                                   {{ session('status') }}
                                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                   </button>
                               </div>
                           @endif
                       </div>
                   </div>
                   
               </div>

               <div class="container-fluid">
              <div class="row mt-2 mb-5">
                <div class="col-md-12">
                        <form  method="get" action="/public-library/search/data">
                                  <div class="input-group">
                                    <input type="text" class="form-control" name="search" placeholder="Enter a Book Name to Search">
                                    <span class="input-group-btn">
                                      <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
                                    </span>
                                  </div>
                                  </form>
                      </div>
              </div>
              <div class="row mt-5">
                @foreach($books as $b)
              @if (isset($b->volumeInfo->previewLink))
          <a href="{{$b->volumeInfo->previewLink}}" target="_blank">
          @else
          <a onclick='newwin()' target="_blank">

          @endif
          <div class="card mx-1 book-card mb-3 mx-2" style="width: 12rem;">
          @if (isset($b->volumeInfo->imageLinks))
         <img class="card-img-top" src=" {{$b->volumeInfo->imageLinks->thumbnail}}" alt="Card image cap">
          @else
          <img class="card-img-top" src="{{asset('assets\img\no_preview.jpg')}}" alt="Card image cap">
          @endif

                    <div class="book-card-overlay text-center" style="padding-top:100px;color:white;font-weight:700;">
                        {{$b->volumeInfo->title}}  
                          
</div>
</div>
</a>

   

        
                @endforeach

                </div>
               </div>

                </div>
       </div>
    
   </div>
@endsection

@push('js')
<script>function newwin() {              
alert('This book is not availabe in the region.')}
</script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush