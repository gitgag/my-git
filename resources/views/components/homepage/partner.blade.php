@props(['partner','partnerlist'])
<div class="container text-center m-5">
<h4 class="section-title"> {{$partner[0]->partner_title}} </h4>

<div class="row align-items-center">
   @foreach ($partnerlist as $partner_list)
<div class="col-sm-2">
<img src="{{asset($partner_list->logo_path)}}" class="img-fluid m-4" style="height:100px;" alt="">
</div>
@endforeach

</div>

</div>



<!--

<section id="partners" class="p-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 offset-lg-2 col-md-12 col-sm-12 ">
                <h4 class="section-title">Partners</h4>
             
            </div>
        </div>
        <div class="blog-grids row mt-5">
            <div class="col-md blog-grid" id="zoomIn">
               
                    <figure><img src="assets/images/cisco1.jpg" class="img-fluid" alt=""></figure>
                
                <div class="blog-info">
                    <h3><a href="#cisco.html">Cisco</a> </h3>
                
                </div>
            </div>
    
            <div class="col-md blog-grid blog-grid" id="zoomIn">
              
                    <figure><img src="assets/images/oracle1.jpg" class="img-fluid" alt=""></figure>
            
                <div class="blog-info">
                    <h3><a href="#oracle.html">Oracle</a> </h3>
                 
                </div>
            </div>
			
	
				         <div class="col-md blog-grid" id="zoomIn">
                
                    <figure><img src="assets/images/fortinet1.jpg" class="img-fluid" alt=""></figure>
            
                <div class="blog-info">
                    <h3><a href="#fortinet.html">Fortinet</a> </h3>
                
                </div>
            </div>

			
            <div class="col-md blog-grid" id="zoomIn">
                
                <figure><img src="assets/images/dellemc_vps.png" class="img-fluid" alt=""></figure>
        
            <div class="blog-info">
                <h3><a href="#dell.html">DELL EMC</a> </h3>
            
            </div>
        </div>
	
			
        </div>

		
		<div class="blog-grids row mt-5">
		         <div class="col-md blog-grid" id="zoomIn">
              
                    <figure><img src="assets/images/vmware1.jpg" class="img-fluid" alt=""></figure>
              
                <div class="blog-info">
                    <h3><a href="#vmware.html">VMware</a> </h3>
                
                </div>
            </div>
            
         <div class="col-md blog-grid" id="zoomIn">
           
                    <figure><img src="assets/images/trendmicro_1.png" class="img-fluid" alt=""></figure>

                <div class="blog-info">
                    <h3><a href="#trendmicro.html">Trend Micro</a> </h3>
                
                </div>
            </div>
            
            
            <div class="col-md blog-grid" id="zoomIn">
                
                    <figure><img src="assets/images/checkpoint_1.png" class="img-fluid" alt=""></figure>
            
                <div class="blog-info">
                    <h3><a href="#checkpoint.html">Check Point</a> </h3>
                
                </div>
            </div>

            <div class="col-md blog-grid" id="zoomIn">
                
                <figure><img src="assets/images/F52.png" class="img-fluid" alt="" style="height:100px"></figure>
        
            <div class="blog-info">
                <h3><a href="#F5.html">F5</a> </h3>
            
            </div>
        </div>
		
		</div>
		
			<div class="blog-grids row mt-5">
			    
			    		         <div class="col-md blog-grid" id="zoomIn">
              
                    <figure><img src="assets/images/lenovopartner.png" class="img-fluid" alt=""></figure>
              
                <div class="blog-info">
                    <h3><a href="#lenovo.html">Lenovo</a> </h3>
                
                </div>
            </div>
            
            		         <div class="col-md blog-grid" id="zoomIn">
              
                    <figure><img src="assets/images/dellemc_vps.png" class="img-fluid" alt=""></figure>
              
                <div class="blog-info">
                    <h3><a href="#hp.html">HPE</a> </h3>
                
                </div>
            </div>
            
            <div class="col-md blog-grid" id="zoomIn">
              
              <figure><img src="assets/images/dellemc_vps.png" class="img-fluid" alt=""></figure>
        
          <div class="blog-info">
              <h3><a href="#hp.html">Adobe</a> </h3>
          
          </div>
      </div>
            
            
            
			    </div>
				
				
					<div class="blog-grids row mt-5">
					<div class="col-lg-4 col-md-6 col-sm-12 blog-grid" id="zoomIn">
					         
					         </div>
					    
					    </div>
	
		

		
    </div>
</section>
-->




