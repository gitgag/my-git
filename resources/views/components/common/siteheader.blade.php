@props(['header_txt'])
<!-- site header -->
<header id="site-header" class="fixed-top">
  <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="{{url('/')}}">
         
       {{$header_txt[0]->header_text}}
      </a>
      <button class="navbar-toggler bg-gradient" type="button" data-toggle="collapse"
          data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav m-auto">
              <li class="nav-item">
                  <a class="nav-link" href="{{url('/')}}">Home </a>
              </li>
              <li class="nav-item active">
                  <a class="nav-link" href="{{url('/about')}}">About</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{url('/services')}}">Services</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{('/contact')}}">Contact</a>
              </li>
          </ul>
     
      </div>
  </nav>
</header>
<!-- //site header -->