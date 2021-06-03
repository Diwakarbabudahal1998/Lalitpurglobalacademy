@extends('layouts.frontend.app')

@section('title')
{{$news->news_title}} | LGA School
@endsection

@section('content')
    <!--Page View-->
    <section class="page-view">
      <section class="page-view-overlay">
        <div class="container">
          <div class="row page-view-row justify-content-between">
            <div class="page-view-text">
            <h2> News Detailed</h2>
          </div>
          <div class="about-links">
            Home <i class="fa fa-angle-right px-2" aria-hidden="true"></i> <span>Single News</span>
          </div>
        </div>

        </div>
      </section>
    </section>
    <!--End Page View-->
    <!--Single News-->
    <section class="single-news about-main news-main">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="single-news-image">
                    <h1 class="mt-5">{{$news->news_title}}</h1>
                    <span class="badge badge-secondary text-light font-weight-0">{{$news->news_category}}</span> | Posted : {{$news->created_at->diffForHumans()}}
                        <hr class="py-1">

                        <div class="row d-flex justify-content-center">
                            <img src="{{asset('/storage/'.$news->news_image)}}" class="img-fluid mt-2 w-100"/>
                            </div>
                            <div class="single-news-text">
                                {!!$news->news_description!!}
                            </div>
                    </div>
                </div>
       
            </div>
        </div>
    </section>
    <!--End News-->

@endsection
