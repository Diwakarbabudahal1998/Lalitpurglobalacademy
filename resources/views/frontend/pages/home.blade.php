@extends('layouts.frontend.app')

@section('title')
Home | LGA School
@endsection

@section('content')
<!--Start Banner-->
<section class="banner">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active" style="background-image: url('./assets/img/banner/bs2.JPG');">
                <div class="overlay">
                    <div class="carousel-caption justify-content-left d-md-block">
                        <h6>15 Years of Excellence!</h6>
                        <h1>Welcome to Lalitpur Global Family</h1>
                        <div class="line"></div>
                        <div class="row">
                            <div class="col-md-10">
                                <p class="d-block">
                                    The people opening the website are one of the few optimistic persons in the world
                                    who are trying to find the best school in Nepal. Lalitpur Global is an institution
                                    constantly upgrading with the time and need of the present generation. LGA
                                    welcomes you to see its state-of-the-art infrastructure equipped with the modern
                                    devices and softwares gifted by the innovative technology world.
                                </p>
                            </div>
                        </div>

                        <a href="#about"><button class="btn btn-transparent banner-btn">
                                Find About Us
                            </button></a>
                    </div>
                </div>
            </div>

            <div class="carousel-item" style="background-image: url('./assets/img/banner/bs2.JPG');">
                <div class="overlay">
                    <div class="carousel-caption justify-content-left d-md-block">
                        <h6>15 Years of Excellence</h6>
                        <h1>Welcome to Lalitpur Global Family</h1>
                        <div class="line"></div>
                        <div class="row">
                            <div class="col-md-10">
                                <p class="d-block">
                                    The people opening the website are one of the few optimistic persons in the world
                                    who are trying to find the best school in Nepal. Lalitpur Global is an
                                    institution constantly upgrading with the time and need of the present generation.
                                    LGA welcomes you to see its state-of-the-art infrastructure equipped with the
                                    modern devices and softwares gifted by the innovative technology world.
                                </p>
                            </div>
                        </div>
                        <a href="#about">
                            <button class="btn btn-transparent banner-btn">
                                Find About Us
                            </button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</section>
<!--End Banner-->
<!--Start Services-->
<section class="awards mt-4">
    <div class="awards-overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 col-md-text-center award-text">
                    <h1>School Programs</h1>
                    <p>School yearly programs and awards destributions.</p>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">

                    <div class="p-5 rounded">
                        <!-- Bootstrap carousel-->
                        <div class="carousel slide" id="carouselExampleIndicators1" data-ride="carousel">



                            <!-- Bootstrap inner [slides]-->
                            <div class="carousel-inner px-5 pb-4">
                                <!-- Carousel slide-->
                                <div class="carousel-item active">
                                    <div class="media">
                                        <img src="{{ asset('assets\img\awards\pa.JPG') }}" />
                                    </div>
                                </div>
                                <div class="carousel-item active">
                                    <div class="media">
                                        <img src="{{ asset('assets\img\awards\prgm.JPG') }}" />
                                    </div>
                                </div>

                                <!-- Carousel slide-->
                                <div class="carousel-item">
                                    <div class="media">
                                        <img src="{{ asset('assets\img\awards\pb.JPG') }}" />
                                    </div>
                                </div>

                                <!-- Carousel slide-->
                                <div class="carousel-item">
                                    <div class="media">
                                        <img src="{{ asset('assets\img\awards\pc.JPG') }}" />
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="media">
                                        <img src="{{ asset('assets\img\awards\pd.JPG') }}" />
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="media">
                                        <img src="{{ asset('assets\img\awards\pe.JPG') }}" />
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="media">
                                        <img src="{{ asset('assets\img\awards\pf.JPG') }}" />
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Bootstrap controls [dots]-->
                        <a class="carousel-control-prev width-auto" href="#carouselExampleIndicators1" role="button" data-slide="prev">
                            <i class="fa fa-angle-left text-dark text-lg"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next width-auto" href="#carouselExampleIndicators1" role="button" data-slide="next">
                            <i class="fa fa-angle-right text-dark text-lg"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>

<!--End Services-->
<!--Start About-->
<section class="about" id="about">
    <div class="container">
        <div class="row about-row">
            <div class="col-md-6 mt-4">
                
                <img src="{{ asset('assets\img\about\subanjan.jpg') }}" class="img-fluid">
            </div>
            <div class="col-md-6 p-3 about-text">
                <h2>We are expert of the Best Educational Institutions.</h2>
                <h4>15 Years of Excellence!</h4>
                <p>Situated at the prime location of Kathmandu valley, Imadol, Lalitpur, Lalitpur Global secondary school has
                    proved its
                    academic strength by making a difference to individuals and community. We are proud to look back
                    over a decade
                    of enriching thousands of lives with the quality education making them a successful human.
                    LGA takes this opportunity not only to celebrate past achievements but also to look for the future
                    as LGA
                    continues to deliver leaders who can truly make a difference to the community. Based on the pride
                    past
                    achievements, LGA is continually improving its overall infrastructure and education delivery
                    methods linking
                    with modern information technology.<br><br>
                    Come, see, and experience the lively vibrancy of the school atmosphere!
                    You are always welcome at LGA School.</p>

                <a href="/contact"><button class="btn btn-primary ">Contact Us</button></a>

            </div>
        </div>
    </div>
</section>
<!--End About-->
<!--Start Awards-->
<section class="awards mt-4">
    <div class="awards-overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">

                    <div class="p-5 rounded">
                        <!-- Bootstrap carousel-->
                        <div class="carousel slide" id="carouselExampleIndicators1" data-ride="carousel">



                            <!-- Bootstrap inner [slides]-->
                            <div class="carousel-inner px-5 pb-4">
                                <!-- Carousel slide-->
                                <div class="carousel-item active">
                                    <div class="media">
                                        <img src="{{ asset('assets\img\awards\project.jpg') }}" />
                                    </div>
                                </div>

                                <!-- Carousel slide-->
                                <div class="carousel-item">
                                    <div class="media">
                                        <img src="{{ asset('assets\img\awards\whyus2.jpg') }}" />
                                    </div>
                                </div>

                                <!-- Carousel slide-->
                                <div class="carousel-item">
                                    <div class="media">
                                        <img src="{{ asset('assets\img\awards\muna.jpg') }}" />
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="media">
                                        <img src="{{ asset('assets\img\awards\whyus1.jpg') }}" />
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Bootstrap controls [dots]-->
                        <a class="carousel-control-prev width-auto" href="#carouselExampleIndicators1" role="button" data-slide="prev">

                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next width-auto" href="#carouselExampleIndicators1" role="button" data-slide="next">

                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 col-md-text-center award-text">
                    <h1>Our Acheivements</h1>
                    <p>All these years, our students acheivement is what makes us proud.</p>
                </div>


            </div>
        </div>
    </div>

</section>
<!--End Awards-->
<!--Start News-->
<section class="news">
    <div class="container">
        <h1>Academic's News</h1>

        <div class="row justify-content-center  news-row">



            @foreach ($news->slice(0, 3) as $n)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-image">
                        <img src="{{ asset('storage/' . $n->news_image) }}" class="card-img-top" alt="...">
                        <div class="img-card-overlay text-center"><i class="fas fa-paperclip"></i></div>
                    </div>
                    <div class="card-body">
                        <div class="card-posted"><i class="fa fa-clock px-1 my-2" aria-hidden="true"></i>{{ $n->created_at->diffForHumans() }}</div>
                        {{-- <span class="badge badge-secondary text-light font-weight-0 mb-2">{{ $n->news_category }}</span> --}}
                        <h5 class="card-title">{{ $n->news_title }}</h5>
                        <p class="card-text">{{ $n->news_description }}</p>
                        <a href="/news/{{ $n->id }}" class="btn btn-primary btn-news">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
    </div>
</section>
<!--End News-->
<!--Start Events-->
<section class="events">
    <div class="container">
        <div class="row">
            <div class="col-md-7 events-col">
                <div class="events-title">Upcoming Events</div>
                <div class="line"></div>
                @foreach ($events->slice(0, 3) as $e)
                <div class="card">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{ asset('storage/' . $e->event_image) }}" style="height:150px;" class="card-img">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <a href="/events/{{ $e->id }}">
                                    <h5 class="card-title">{{ $e->event_title }}</h5>
                                </a>
                               {{--  <span class="badge badge-secondary text-light font-weight-0 mb-2">{{ $e->event_category }}</span> --}}

                                <p class="card-text"><i class="fa fa-calendar-alt px-2" aria-hidden="true"></i>
                                    Starting on: {{ $e->event_start }}</p>
                            </div>
                        </div>
                    </div>


                </div>

                @endforeach


            </div>
            <div class="col-md-5 testimonails">
                <div class="testimonails-title">Our Happy Students</div>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner mt-5">
                        <div class="item carousel-item active">
                            <div class="img-box"><img src="{{ asset('assets\img\pk.JPG') }}" alt=""></div>
                            <p class="testimonial">Time at LGA is always great! Not only academic excellence but
                                I am always made able to discover and develop different types of skills in music, sports,
                                arts and others. All the events with the teachers and friends are always memorable. Among
                                them, parents day becomes more interesting. I am impressed with the school basically to the
                                methods that the school has adopted to cherish the inner ability of students. Finally,
                                I am immensely thankful to the school management, all the teachers and parents for
                                their invaluable contribution,
                                encouragement and hard work. I wish LGA to grow more stars in coming days.</p>
                            <p class="overview"><b>Pradeepta Koirala</b>Class 9</p>
                            <div class="star-rating"> </div>
                        </div>
                       
                        <div class="item carousel-item">
                            <div class="img-box"><img src="{{ asset('assets\img\atm.JPG') }}" alt=""></div>
                            <p class="testimonial">As a student I have been able to develop the way
                             I learn and interact with others to a degree that has also helped me to
                              mature into a better person. I have learned many things from my school and had best experience.
                            On the first day that I went to school it felt like what I imagine it's
                             like visiting a new planet.I was sitting in a large room I've never been
                              in before which was full of things called desks and carpet and walls that
                               were really different from the ones back home. A bunch of other 6 years old,
                                but all of them have different faces,you know like on a new planet though
                                .I didn't know any of them,but I was chilling though.But after some months 
                                I really enjoyed going school.I really loved the teaching skills of my teachers
                                .And,the environment around school were very good.My juniors and seniors were very good and punctual.
                            So,these are my experience at my school.  </p>
                            <p class="overview"><b>Aakrisha Thapa Magar</b>Class 9</p><br>

                        </div>
                    </div> <!-- Carousel controls --> <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev"> <i class="fa fa-angle-left"></i> </a> <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next"> <i class="fa fa-angle-right"></i> </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Events-->

@endsection