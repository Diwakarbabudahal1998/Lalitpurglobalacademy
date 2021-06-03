    <!--Start Navbar-->
    <section class="navbar-top">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" id="main_navbar">
          <a class="navbar-brand" href="/"
            ><img src="{{asset('assets/img/mainlogo1.png')}}"  alt="Logo"
          /></a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item {{ Request::is('/')? 'active' : '' }}">
                <a class="nav-link" href="/"
                  >Home <span class="sr-only">(current)</span></a
                >
              </li>
           
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                About LGA 
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/pre-school/about">About Us</a>
                <a class="dropdown-item" href="/pre-school/facilities">Facilities</a>
                <a class="dropdown-item" href="/pre-school/admission">Admission</a>


              </div>
            </li>
          
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  Team LGA
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/team-lga/message-chairperson">Message from Chairperson/Founder</a>
                  <a class="dropdown-item" href="/team-lga/message-principal">Message from  Principal</a>
                  <a class="dropdown-item" href="/team-lga/family">Team LGA</a>


                </div>
              </li>
              
              <li class="nav-item {{ Request::is('news')? 'active' : '' }}">
                <a class="nav-link" href="/news">News</a>
              </li>

              <li class="nav-item {{ Request::is('events')? 'active' : '' }}">
                <a class="nav-link" href="/events">Events</a>
              </li>
              <li class="nav-item {{ Request::is('contact')? 'active' : '' }}">
                <a class="nav-link" href="/contact">Contact</a>
              </li>

              <li class="nav-item">
                <a href="/apply" target="_blank"><button class="btn btn-primary apply-btn mx-2">
                  Apply Now
                </button></a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </section>
    <!--End Navbar-->