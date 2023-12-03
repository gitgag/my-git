
<x-admin.page-layout >
@section('title','Web Admin')
<x-admin.admin-nav :user_name="Auth::user()->name"/>
<form method="POST" action="{{route('postdata')}}">
  @csrf
  
  <section class="bg-white text-dark" style="">
  <div class="container p-3">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-9 p-3">

        <h1 class="text-dark mb-4">Website Update  </h1>

        <div class="card" style="border-radius: 15px;">
          <div class="card-body">

          <div class="row align-items-center pt-4 pb-3">
          @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Banner text</h6>

              </div>
              <div class="col-md-9 pe-5">

                <textarea class="form-control" rows="3" name="banner_text"> {{$home_page[0]->banner_text}} </textarea>
                @error('banner_text')
                <p class="text-danger"> {{$message}} </p>
                @enderror
              </div>
            </div>

            <hr class="mx-n3">        

            <div class="row align-items-center pt-4 pb-3">

              <div class="col-md-3 ps-5">

                <h6 class="mb-0">vision title</h6>

              </div>
              <div class="col-md-9 pe-5">
                <input type="text" class="form-control form-control-lg" value="{{$home_page[0]->vision_title}}" name="vision_title" />
              
                @error('vision_title')
                <p class="text-danger"> {{$message}} </p>
                @enderror
              </div>
            </div>

            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">vision text</h6>

              </div>
              <div class="col-md-9 pe-5">
              <textarea class="form-control" rows="3" name="vistion_summary">  {{$home_page[0]->vistion_summary}}</textarea>
              @error('vistion_summary')
                <p class="text-danger"> {{$message}} </p>
                @enderror
              </div>
            </div>

            <hr>

            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5">
              <h6 > mission ttile</h6>
        </div>
        <div class="col-md-9 pe-5 ">
          <input type="text" class="form-control form-control-lg" name="mission_title" value="{{$home_page[0]->mission_title}}"/> 
           </div>

              </div>

      <div class="row align-items-center pt-4 pb-3">
        <div class="col-md-3 ps-5">
          <h6> mission text </h6>
</div>
              <div class="col-md-9 pe-5">
          <textarea class="form-control" rows="3" name="mission_txt"> {{$home_page[0]->mission_summary}}  </textarea>
</div>
</div>
<hr class="mx-n3">

<div class="row align-items-center pt-4 pb-3">
  <div class="col-md-3 ps-5"> <h6> service title </h6>  </div>
  <div class="col-md-9 pe-5"> <input type="text" class="form-control form-control-lg" name="service_title" value="{{$home_page[0]->service_title}}"/>    </div>
   </div>

   <div class="row align-items-center pt-4 pb-3">
    <div class="col-md-3 ps-5"> <h6>  service text </h6></div>
    <div class="col-md-9 pe-5"> <textarea class="form-control" rows="3" name="service_txt">  </textarea> </div>
</div>
<hr class="mx-n3">

<div class="row align-items-center"> <h6> Company Information </h6> </div>

<div class="row align-items-center pt-4 pb-3"> 
  <div class="col-md-3 ps-5"> <h6>Logo </h6></div>
  <div class="col-md-9 pe-5"> <input type="file" class="form-control form-control-sm" name="main_logo" /> </div>
@error('main_logo')
<p class="text-danger"> {{$message}} </p>
@enderror    
</div>

    <div class="row align-items-center pt-4 pb-3"> 
  <div class="col-md-3 ps-5"> <h6>Company Name </h6></div>
  <div class="col-md-9 pe-5"> <input type="text" class="form-control form-control-lg" name="com_name" value="{{$com_info[0]->company_title}}" /> </div>
    </div>

    <div class="row align-items-center pt-4 pb-3"> 
  <div class="col-md-3 ps-5"> <h6>Description </h6></div>
  <div class="col-md-9 pe-5"> <input type="text" class="form-control form-control-lg" name="com_desc" value="{{$com_info[0]->company_desc}}"/> </div>
    </div>

    <div class="row align-items-center pt-4 pb-3"> 
  <div class="col-md-3 ps-5"> <h6>Address </h6></div>
  <div class="col-md-9 pe-5"> <textarea class="form-control" rows="3" name="com_add"> {{$com_info[0]->address}}</textarea> </div>
    </div>

    
    <div class="row align-items-center pt-4 pb-3"> 
  <div class="col-md-3 ps-5"> <h6>Contact </h6></div>
  <div class="col-md-9 pe-5"> <input type="text" class="form-control form-control-lg" name="com_contact" value="{{$com_info[0]->phone}}"/> </div>
    </div>


            <div class="row align-items-center py-3">

              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Email address</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input type="email" class="form-control form-control-lg" name="com_email" value="{{$com_info[0]->email}}" />

              </div>
            </div>

            <hr class="mx-n3">

     

            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Upload CV</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input class="form-control form-control-lg" id="formFileLg" type="file" />
                <div class="small text-muted mt-2">Upload your CV/Resume or any other relevant file. Max file
                  size 50 MB</div>

              </div>
            </div>

            <hr class="mx-n3">

            <div class="px-5 py-4">
              <button type="submit" class="btn btn-primary btn-lg">submit
              <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
  <span class="visually-hidden">Loading...</span>
  </button>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>
</section>
</form>

</x-admin.page-layout >