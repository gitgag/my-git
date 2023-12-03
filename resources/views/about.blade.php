<x-common.layout>

@section('title','About Us')

<x-common.siteheader :header_txt="$home_page"/>
<!-- about page breadcrumns -->
<section class="inner-banner">
</section>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-padding">
        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">About us</li>
    </ol>
</nav>
<!-- //about page breadcrumns -->

<!-- about page section1-->
<section class="w3l-about">
    <div class="container">
        <div class="row about-content">
            <div class="col-lg-6 info mb-lg-0 mb-5 align-center">
                <!--<span class="title">Technology</span> -->
                <h6>Founders and Team members</h6>
                <p class="mt-md-4 mt-3"> Founded by ICT professionals with more than 15 years of experiences in Financial service industry.</p>
				<p class="mt-md-4 mt-3"> Team members have profession certifications such as CISSP, BRM, CCNP, RHCE, MCSE and so on.</p>
                
            </div>
       
        </div>
    </div>
</section>
<!-- //about page section1-->

<!-- /mobile section --->
<section class="w3l-mobile-content-6">
    <div class="mobile-info">
		
        <!-- /mobile-info-->
        <div class="container">
		
		     <div class="row about-content">
            <div class="col-lg-6 info mb-lg-0 mb-5 align-center">
                <!--<span class="title">Technology</span> -->
                <h6>Core Values</h6> <p class="mt-md-4 mt-3"></p>
        
                
            </div>
       
        </div>
            <div class="row mobile-info-inn mx-lg-0">
		
                <div class="col-lg-4 mobile-right">
                    <div class="row mobile-right-grids mb-lg-5 mb-4">
                        <div class="col-2 mobile-right-icon">
                            <div class="mobile-icon">
                                <span class="fa fa-check-circle"></span>
                            </div>
                        </div>
                        <div class="col-10 mobile-right-info">
                            <h6>Deliver the technology solutions tailored to the customers' needs.</h6>
                          
                        </div>
                    </div>
                    <div class="row mobile-right-grids mb-lg-5 mb-4">
                        <div class="col-2 mobile-right-icon">
                            <div class="mobile-icon">
                                <span class="fa fa-check-circle"></span>
                            </div>
                        </div>
                        <div class="col-10 mobile-right-info">
                            <h6>Respect our physical and social environment.</h6>
                      
                        </div>
                    </div>
                    <div class="row mobile-right-grids">
                        <div class="col-2 mobile-right-icon">
                            <div class="mobile-icon">
                                <span class="fa fa-check-circle"></span>
                            </div>
                        </div>
                        <div class="col-10 mobile-right-info">
                            <h6>Cooperation.</h6>
                     
                        </div>
                    </div>
                </div>
       
                <div class="col-lg-4 mobile-right">
                    <div class="row mobile-right-grids mb-lg-5 mb-4">
                        <div class="col-2 mobile-right-icon">
                            <div class="mobile-icon">
                                <span class="fa fa-check-circle"></span>
                            </div>
                        </div>
                        <div class="col-10 mobile-right-info">
                            <h6>Interdependency with our suppliers.</h6>
                           
                        </div>
                    </div>
                    <div class="row mobile-right-grids mb-lg-5 mb-4">
                        <div class="col-2 mobile-right-icon">
                            <div class="mobile-icon">
                                <span class="fa fa-check-circle"></span>
                            </div>
                        </div>
                        <div class="col-10 mobile-right-info">
                            <h6>Develop our employees with diverse talents.</h6>
                       
                        </div>
                    </div>
                    <div class="row mobile-right-grids">
                        <div class="col-2 mobile-right-icon">
                            <div class="mobile-icon">
                              
                            </div>
                        </div>
                  
                    </div>
                </div>

            </div>
        </div>
        <!-- //mobile-info-->
    </div>
</section>
<!-- //mobile section --->


<!-- move top -->
<button onclick="topFunction()" id="movetop" class="bg-primary" title="Go to top">
  <span class="fa fa-angle-up"></span>
</button>

<x-common.footer :footer="$info"/>


</x-common.layout>