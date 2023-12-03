
@props(['vision'])
<section id="vision" class="bg-white p-5">
  <div class="container" >
  
      <div class="row align-items-center">
      <div class="col-lg-8 offset-lg-2 col-md-12 col-sm-12">
       <!-- <h4 class="section-title">Our Vision</h4> -->
        <h4 class="section-title">{{$vision[0]->vision_title}} </h4>
        <p class="text-center"> {{$vision[0]->vistion_summary}} </p>
      </div>
    </div>
  </div>
  
  </section>