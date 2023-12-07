<x-admin.page-layout>
    @section('title','Registration')
<x-admin.admin-nav />


<div class="card bg-white">
    @if (session('status'))
    <div class="alert alert-success">
        {{session('status')}}
</div>
@endif
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Create Account</h4>
	<p class="text-center">Get started with your free account</p>
	<p>
		<a href="#" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>  Login via Twitter</a>
		<a href="#" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>  Login via facebook</a>
	</p>
	<p class="divider-text">
        <span class="bg-light">OR</span>
    </p>
	<form method="POST" action="{{route('post-reg')}}">
        @csrf

	<div class="input-group mb-3">
	
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 
        <input name="name" class="form-control" placeholder="Full name" type="text">

    </div> 
    @error('name')
        <p class="text text-danger">{{$message}} </p>
        @enderror
    <div class="input-group mb-3">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
        <input name="email" class="form-control" placeholder="Email address" type="text">
    </div> 
    @error('email')
        <p class="text text-danger">{{$message}} </p>
        @enderror

    <div class="input-group mb-3">	
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>

        <input class="form-control" placeholder="Create password" type="password" name="password">
    </div> 
    @error('password')
    <p class="text text-danger">{{$message}} </p>
    @enderror
    <div class="input-group mb-3">
    	
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		
        <input class="form-control" placeholder="Repeat password" type="password"- name="repeat">
    </div>                                     
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block submit-btn" id="loginbtn" onclick="progress(); this.disabled=true; this.form.submit();"> Create Account  </button>
    </div>  
    <p class="text-center">Have an account? <a href="{{route('login-page')}}">Log In</a> </p>                                                                 
</form>
</article>
</div> 

</div> 






</x-admin.page-layout>