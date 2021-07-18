@extends('layouts.frontend.app')

@section('title')
Events | LGA School
@endsection

@section('content')
<!--Page View-->
<section class="page-view">
  <section class="page-view-overlay">
    <div class="container">
      <div class="row page-view-row justify-content-between">
        <div class="page-view-text">
          <h2>Events</h2>
        </div>
        <div class="about-links">
          Home <i class="fa fa-angle-right px-2" aria-hidden="true"></i> <span>Events</span>
        </div>
      </div>

    </div>
  </section>
</section>
<!--End Page View-->
<!--Start Main News-->
<section class="about-main news-main">
  <div class="container">
    <div class="row">
      <!--Start Sidebar-->
      <div class="col-md-4 col-12  about-main-menu news-menu ">
        <div class="sticky-top">
          <form class="pt-5 " method="get" action="/events/search/data">
            <div class="input-group ">
              @csrf
              <input type="text" name="search" class="form-control " placeholder="Search News">
              <div class="input-group-append">
                <button class="btn btn-secondary" type="submit">
                  <i class="fa fa-search"></i>
                </button>
              </div>
          </form>
        </div>

        <ul class="list-group news-list">
          <h3> Recent News</h3>

          @foreach($news->slice(0,3) as $n)
          <li class="list-group-item">
            <div class="card mb-3">
              <div class="row no-gutters">
                <div class="col-md-4 col-sm-4 col-4">
                  <img src="{{asset('storage/'.$n->news_image)}}" class="card-img h-100" alt="...">
                </div>
                <div class="col-md-8 col-sm-8 col-8">
                  <div class="card-body ">
                    <a href="/news/{{$n->id}}">
                      <h5 class="card-title">{{$n->news_title}}</h5>
                    </a>


                    <p><i class="fas fa-clock pr-2"></i>{{$n->created_at->diffForHumans()}}</p>
                  </div>
                </div>
              </div>
            </div>
          </li>
          @endforeach


          <li class="list-group-item"><a href="/news"><button class="btn btn-primary">Read More</button></a></li>

        </ul>
      </div>
    </div>
    <!--End Sidebar-->
    <div class="col-md-8 col-12">
      <section class="events event-page">
        <div class="container">
          <div class="row">
            <div class="col-md-12 events-col event-page-col">
              <div class="events-title">Upcoming Events</div>
              <div class="line"></div>
              @foreach($events as $e)
              <div class="card mt-5">
                <div class="row no-gutters">
                  <div class="col-md-5 col-sm-12 col-xs-6">
                    <img src="{{asset('storage/'.$e->event_image)}}" style="height:200px;border:1px solid #d5d5d5;"
                      class="card-img" alt="...">
                  </div>
                  <div class="col-md-7 col-sm-12 col-xs-6">
                    <div class="card-body" style="background:none;border:1px solid #e5e5e5">
                      <a href="/events/{{$e->id}}">
                        <h5 class="card-title">{{$e->event_title}}</h5>
                      </a>

                      <h6 style="font-size:14px;"><i class="fas fa-calendar-alt px-2"
                          style="color:#d3434b;"></i>{{$e->event_start}}<i class="fa ml-2 fa-clock px-1 py-2"
                          aria-hidden="true" style="color:#d3434b;"></i>{{$e->created_at->diffForHumans()}}</h6>

                      <a href="/events/{{$e->id}}"> <button class="btn btn-primary">Read More</button></a>

                    </div>
                  </div>


                </div>
                @endforeach
              </div>
              <div class="mt-5">
                {{$events->links()}}
              </div>
            </div>
            <div class="col-md-6"></div>
          </div>
        </div>
      </section>



    </div>

  </div>
  </div>

</section>
<!--End News-->
@endsection