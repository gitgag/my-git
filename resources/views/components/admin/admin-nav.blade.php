@props(['user_name'])
<nav class="navbar navbar-expand-lg navbar-light bg-light p-3">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0e/Microsoft_365_%282022%29.svg/512px-Microsoft_365_%282022%29.svg.png" 
        alt="logo" width="30" height="32" class="d-inline-block align-text-top"/>

        My Company
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link mx-2 active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2" href="#"> Product </a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2" href="#">Support</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link mx-2 dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Profile
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                @guest
              <li><a class="dropdown-item" href="{{route('reg-page')}}">Register</a></li>
              <li><a class="dropdown-item" href="{{route('login-page')}}">Login</a></li>
              @else
              <li>  <a class="dropdown-item" href="#"> User: {{$user_name}} </a> </li>
              <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
              <li><a class="dropdown-item" href="#">Setting</a></li>
              @endguest
            </ul>
          </li>
        </ul>
      </div>
    </div>
    </nav>