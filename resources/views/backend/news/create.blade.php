@extends('layouts.app')

@section('title')
Add News | Omega Secondary School
@endsection
@section('content')
    @include('layouts.headers.cards')
    
    <div class="container-fluid mt--7">
        <div class="row justify-content-center">
            
            <div class="col-xl-10 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="col-12 mb-0">News Title</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('news.store') }}"encType="multipart/form-data" autocomplete="off">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 pl-lg-12">
                                    <div class="form-group{{ $errors->has('news_title') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-news_title">News Title</label>
                                        <input type="text" name="news_title" id="input-news_title" class="form-control form-control-alternative{{ $errors->has('news_title') ? ' is-invalid' : '' }}" placeholder="{{ __('News Title') }}" value="" required autofocus>
                        
                                        @if ($errors->has('news_title'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('news_title') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12 pl-lg-12">
                                    <div class="form-group{{ $errors->has('news_category') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-news_category">News Title</label>
                                        <select class="form-control" name="news_category" id="input-news_category"  required >
                                                <option value="Pre-School" selected>Pre-School</option>
                                                <option  value="Middle-School">Middle-School</option>
                                                <option  value="Senior-School">Senior-School</option>

                                                </select>
                                        @if ($errors->has('news_category'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('news_category') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12 pl-lg-12">
                                    <div class="form-group{{ $errors->has('news_description') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-news_description" >News Description</label>
                                        <textarea id="mytextarea"  name="news_description"  ></textarea>
                                        @if ($errors->has('news_description'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('news_description') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12 pl-lg-12">
                                <img src="#" id="news-img-display" width="200px" />  
                                    <div class="form-group{{ $errors->has('news_image') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-news_image" >News Image</label>
                                        <br>
                        
                                        @if ($errors->has('news_image'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('news_image') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <input type="file" name="news_image" id="image"/>

                                </div>
                            
                            </div>
                          
                          

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">Add News</button>
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