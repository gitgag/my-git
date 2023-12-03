@props(['banner'])
<!-- banner section -->
<section id="home" class="banner">
    <div id="banner-bg-effect" class="banner-effect"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-12 col-sm-12 order-lg-first mt-lg-0 mt-4">
              <!--  <h1 class="mb-4 title">We provide<strong> Value</strong> to your business, <br> <strong>Partner</strong> with us for your <strong> Success </strong>
                </h1> -->
                <h1 class="mb-4 title">
            {{$banner[0]->banner_text}}
                </h1>

                <div class="mt-5">
                    <a class="btn btn-primary btn-style mr-2" href="#">About Us</a>
                    <a class="btn btn-outline btn-outline-style" href="#">Our Services </a>
                </div>
            </div>
			

			
        </div>
    </div>
</section>
<!-- //banner section -->