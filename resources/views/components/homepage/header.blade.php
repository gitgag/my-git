
<header id="site-header" class="fixed-top">
  <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="" href="{{url('/')}}">
	  <img src="{{asset('assets/images/vps_logo.png')}}" alt="VPS" width="300" height="100">
       
      </a>
      <button class="navbar-toggler bg-gradient" type="button" data-toggle="collapse"
          data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav m-auto">
              <li class="nav-item active">
                  <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{url('/about')}}">About</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{url('/services')}}">Services</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{url('/contact')}}">Contact</a>
              </li>
          </ul>
	
		  
      </div>
  </nav>
</header>  