   <!--Start Sidebar-->
   <div class="col-md-4 col-12  about-main-menu">
       <div class="sticky-top">
           <ul class="list-group">
               <h3> Recent Events</h3>
               @foreach ($events->slice(0, 3) as $e)
                   <a href="/events/{{ $e->id }}">
                       <li class="list-group-item">
                           <h6>{{ $e->event_title }}</h6>
                   </a>


                   <p> <span class="badge badge-secondary text-light font-weight-0">{{ $e->event_category }}</span><i
                           class="fas fa-calendar-alt py-2 px-2"></i>Starting on: {{ $e->event_start }}</p>
                   </li>
               @endforeach
               <li class="list-group-item"><a href="/events"><button class="btn btn-primary">Read More</button></li></a>

           </ul>
           <ul class="list-group news-list">
               <h3> Latest News</h3>
               @foreach ($news->slice(0, 3) as $n)
                   <li class="list-group-item">
                       <div class="card mb-3">
                           <div class="row no-gutters">
                               <div class="col-md-4 col-sm-4 col-4">
                                   <img src="{{ asset('storage/' . $n->news_image) }}" class="card-img h-100" alt="...">
                               </div>
                               <div class="col-md-8 col-sm-8 col-8">
                                   <div class="card-body ">
                                       <a href="/news/{{ $n->id }}">
                                           <h5 class="card-title">{{ $n->news_title }}</h5>
                                       </a>
                                       <span
                                           class="badge badge-secondary text-light font-weight-0 mb-2">{{ $n->news_category }}</span>

                                       <p><i class="fas fa-clock pr-2"></i>{{ $n->created_at->diffForHumans() }}</p>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </li>
               @endforeach


               <li class="list-group-item"><a href="/news"><button class="btn btn-primary">Read More</button></li></a>

           </ul>
       </div>
   </div>
   <!--End Sidebar-->
