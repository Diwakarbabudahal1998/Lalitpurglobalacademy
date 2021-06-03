@extends('layouts.frontend.app')

@section('title')
News | LGA School
@endsection

@section('content')
    <!--Page View-->
    <section class="page-view">
      <section class="page-view-overlay">
        <div class="container">
          <div class="row page-view-row justify-content-between">
            <div class="page-view-text">
            <h2>News</h2>
          </div>
          <div class="about-links">
            Home <i class="fa fa-angle-right px-2" aria-hidden="true"></i> <span>News</span>
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
               <div class="col-md-4 col-12  about-main-menu news-menu " >
                <div class="sticky-top">
                  <form class="pt-5 " method="get" action="/news/search/data">
                 <div class="input-group ">
                   @csrf
                   <input type="text" name="search" class="form-control " placeholder="Search News">
                   <div class="input-group-append">
                     <button class="btn btn-secondary" type="submit">
                       <i class="fa fa-search"></i>
                     </button>
                   </div>
                 </form></div>
                 <h3> Category</h3>
                 <div class="filter-content">
                   <div class="list-group list-group-flush">
                     <a href="/news/category/Primary-School" class="list-group-item">Pre-School</a>
                     <a href="/news/category/Middle-School" class="list-group-item">Middle-School </a>
                     <a href="/news/category/Senior-School" class="list-group-item">Senior School </a>
                   </div>  <!-- list-group .// -->
                 </div>
                 <ul class="list-group">
                   <h3> Recent Events</h3>
                   <?php $count = 0; ?>

          @foreach($events->slice(0,3) as $e)
                   <a href="/events/{{$e->id}}"><li class="list-group-item"><h6>{{$e->event_title}}</h6></a>
                  

                 <p> <span class="badge badge-secondary text-light font-weight-0">{{$e->event_category}}</span><i class="fas fa-calendar-alt py-2 px-2"></i>Starting on: {{$e->event_start}}</p></li>
                  @endforeach
           
                     <li class="list-group-item"><a href="/events"><button class="btn btn-primary">Read More</button></a></li>
                 </ul>
               </div> 
                     </div>
                     <!--End Sidebar-->
          <div class="col-md-8 col-12">
            <div class=" news news-page">
              <div class="row  news-row">
                  @foreach($news as $n)
                  <div class="col-md-6 col-sm-10 col-xs-10">
                    <div class="card" style="min-height:400px;">
                      <div class="card-image">
                     
                      <img src="{{asset('/storage/'.$n->news_image)}}" class="card-img-top" alt="...">
                      <div class="img-card-overlay text-center"><i class="fas fa-paperclip"></i></div>
                    </div>
                      <div class="card-body">
                        <div class="card-posted"><i class="fa fa-clock px-1 my-2" aria-hidden="true"></i>{{$n->created_at->diffForHumans()}}</div>
                        <span class="badge badge-secondary text-light font-weight-0">{{$n->news_category}}</span>
        
                    <h5 class="card-title"><a href="/news/{{$n->id}}" class="text-dark">{{$n->news_title}}</a></h5>
                        <p class="card-text">{{$n->news_description}}</p>
                        <a href="/news/{{$n->id}}" class="btn btn-primary btn-news">Read More</a>
                      </div>
                    </div>
                  </div>
                   @endforeach   
              </div>
            </div>
            {{$news->links()}}

          </div>
     
        </div>
      </div>

    </section>
 <!--End News-->
@endsection
