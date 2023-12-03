<x-admin.page-layout>
    @section('title', 'Sign In')
<x-admin.admin-nav />

<section >
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center p-3 border">
  
      <div class="col-md-8 col-lg-6 col-xl-4 pt-5">
        <form method="POST" action="{{route('login')}}">
          @csrf
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p class="lead fw-normal mb-0 me-3">Sign in with</p>
            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fa fa-facebook-f"></i>
            </button>

            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fa fa-twitter"></i>
            </button>

            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fa fa-linkedin"></i>
            </button>
          </div>

          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">Or</p>
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="text" name="email" class="form-control form-control-lg"
              placeholder="Enter a valid email address" />
       
            @error('email') 
            <p class="text-danger"> {{$message}} </p> 
            @enderror
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" name="password" class="form-control form-control-lg"
              placeholder="Enter password" />
        
            @error('password')
            <p class="text-danger"> {{$message}} </p>
            @enderror
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" name="remember" />
              <label class="form-check-label">
                Remember me
              </label>
            </div>
            <a href="#!" class="text-body">Forgot password?</a>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
              style="height:50px; width: 120px;" id="loginbtn" 
              onclick="progress(); this.disabled=true; this.form.submit(); ">Login
              
            </button>

            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="{{route('reg-page')}}"
                class="link-danger">Register</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>

</section>

<x-admin.admin-footer />

</x-admin.page-layout>