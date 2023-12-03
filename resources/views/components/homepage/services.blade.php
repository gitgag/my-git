@props(['service','service_list','service_icon'])
<section id="services" class="p-5 shadow bg-white">
  <div class="container">
	
    <div class="row align-items-center">
      <div class="col-lg-8 offset-lg-2 col-md-12 col-sm-12">
        <h4 class="section-title">{{$service[0]->service_title}}</h4>
      
        @foreach($service_list as $list)
      <p class="text-center">
       
 {{$list->description}}
		</p>
    @endforeach

      </div>
    </div>
    
    <div class="row ">

    @foreach ($service_icon as $icon)
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="box-wrap">
          <div class="icon">
            <span class="{{$icon['icon']}}"></span>
          </div>
          <h4><a href="services.html">  {{$icon->description}} </a></h4>
         
        </div>
      </div>
  @endforeach
 	  
    </div>
  </div>
</section>
<!-- //home page service grids -->