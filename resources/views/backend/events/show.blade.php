@extends('layouts.app')

@section('title')
Showing Events | Omega Secondary School
@endsection
@section('content')
    @include('layouts.headers.cards')
    
    <div class="container-fluid mt--7">
        <div class="row justify-content-center">
            
            <div class="col-xl-10 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="col-12 mb-0">Showing {{$events->event_title}}</h3>
                        </div>
                    </div>
                    <div class="card-body">
                    <?php $id=$events->id?>
                        <form method="POST" action="{{ route('news.update',$id) }}"encType="multipart/form-data" autocomplete="off">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 pl-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" >Event Title</label>
                                        <input type="text"  value="{{$events->event_title}}" disabled class="form-control  text-dark form-control-alternative{{ $errors->has('news_title') ? ' is-invalid' : '' }}" placeholder="{{ __('News Title') }}" value="" required autofocus>
                        
                                    </div>
                                </div>
                                <div class="col-md-12 pl-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label">Event Category</label>
                                        <input type="text" value="{{$events->event_category}}"  class="form-control text-dark form-control-alternative{{ $errors->has('news_title') ? ' is-invalid' : '' }}" disabled> 
                                     
                                    </div>
                                </div>
                                <div class="col-md-12 pl-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label">Event Start Time</label>
                                        <input type="text" value="{{$events->event_start}}"  class="form-control text-dark form-control-alternative{{ $errors->has('news_title') ? ' is-invalid' : '' }}" disabled> 
                                     
                                    </div>
                                </div>
                                <div class="col-md-12 pl-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-news_description" >News Description</label>
                                        <div class="text" style="border:1px solid #d5d5d5;background:white;color:black;
                                        padding:20px;">{!!$events->event_description!!}</div>
                                    
                                    </div>
                                </div>
                                <div class="col-md-12 pl-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-news_image" >Event Image</label>
                                        <br>
                        
                                 
                                    </div>
                                    <img src="{{asset('storage/'.$events->event_image)}}" id="news-img-display" width="200px" />  

                                </div>
                            
                            </div>
                          
                          

                               
                          
                        </form>
                    </div>
                </div>
            </div>

        </div>
 
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush