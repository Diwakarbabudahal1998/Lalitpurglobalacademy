@extends('layouts.app')

@section('title')
Edit Events | LGA
@endsection
@section('content')
    @include('layouts.headers.cards')
    
    <div class="container-fluid mt--7">
        <div class="row justify-content-center">
            
            <div class="col-xl-10 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="col-12 mb-0">Editing {{$events->event_title}}</h3>
                        </div>
                    </div>
                    <div class="card-body">
                    <?php $id=$events->id?>
                        <form method="POST" action="{{ route('events.update',$id) }}"encType="multipart/form-data" autocomplete="off">
                            @csrf
                            {{method_field('PUT')}}
                            <div class="row">
                                <div class="col-md-12 pl-lg-12">
                                    <div class="form-group{{ $errors->has('event_title') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-event_title">Event Title</label>
                                        <input type="text" name="event_title" id="input-event_title"  value="{{$events->event_title}}" class="form-control form-control-alternative{{ $errors->has('event_title') ? ' is-invalid' : '' }}" placeholder="{{ __('Events Title') }}" value="" required autofocus>
                        
                                        @if ($errors->has('event_title'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('event_title') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12 pl-lg-12">
                                    <div class="form-group{{ $errors->has('event_category') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-event_category">Event Title</label>
                                        <select class="form-control" name="event_category" id="input-event_category"  value="{{$events->event_category}}" required >
                                                <option value="Pre-School"  <?php  $events->event_category==="Pre-School"?print_r("selected"):""?>>Pre-School</option>
                                                <option  value="Middle-School" <?php $events->event_category==="Middle-School"?print_r("selected"):""?>>Middle-School</option>
                                                <option  value="Senior-School" <?php $events->event_category==="Senior-School"?print_r("selected"):""?>>Senior-School</option>

                                                </select>
                                        @if ($errors->has('event_category'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('event_category') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12 pl-lg-12">
                                    <div class="form-group{{ $errors->has('event_start') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-event_start">Event Start Date</label>
                                        <input type="text" name="event_start" id="input-event_start"  value="{{$events->event_start}}" class="form-control form-control-alternative{{ $errors->has('event_start') ? ' is-invalid' : '' }}" placeholder="{{ __('Events Title') }}" value="" required autofocus>
                        
                                        @if ($errors->has('event_start'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('event_start') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12 pl-lg-12">
                                    <div class="form-group{{ $errors->has('event_description') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-event_description" >Event Description</label>
                                        <textarea id="mytextarea"  name="event_description"  >{{$events->event_description}}</textarea>
                                        @if ($errors->has('event_description'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('event_description') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12 pl-lg-12">
                                    <div class="form-group{{ $errors->has('event_image') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-event_image" >Event Image</label>
                                        <br>
                                        <input type="file" name="event_image"  id="image"/>
                        
                                        @if ($errors->has('event_image'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('event_image') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <img src="{{asset('storage/'.$events->event_image)}}" id="news-img-display" width="200px" />  

                                </div>
                            
                            </div>
                          
                          

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">Edit Events</button>
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