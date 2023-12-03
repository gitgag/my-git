@props(['mission'])
<section id="mission" class="bg-light p-5 pb-1">
  <div class="container">
  
      <div class="row align-items-center">
      <div class="col-lg-8 offset-lg-2 col-md-12 col-sm-12">
        <h4 class="section-title">{{$mission[0]->mission_title}}</h4>
        <p class="text-center">{{$mission[0]->mission_summary}}</p>
      </div>
    </div>
  </div>
  
  </section>