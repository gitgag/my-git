@props(['footer'])

<!-- site footer -->
<footer id="site-footer">
  <div class="top-footer">
    <div class="container my-md-5 my-4">
      <div class="row">
        <div class="col-lg-4">
          <div class="footer-logo mb-3">
            <a href="index.html">
            {{$footer[0]->company_title}}
            </a>
          </div>
          <div>
            <p class=""> {{$footer[0]->company_desc}}</p>
          </div>
        </div>
        <!-- Quick Links -->
        <div class="col-lg-3 col-md-4 mt-lg-0 mt-5">
          <h4 class="footer-title">Quick Links</h4>
          <ul class="footer-list">
            <li><a href="about.html"> About company</a></li>
            <li><a href="services.html"> Our services</a></li>
      
          </ul>
        </div>
      
	
        <div class="col-lg-5 col-md-8 mt-lg-0 mt-5">
          <h4 class="footer-title">Contact Us</h4>
          <p class="mb-4"> </p>
          <p class="mb-4">Address: {{$footer[0]->address}} </p>
<p class="mb-4">Phone: {{$footer[0]->phone}}</p>
<p class="mb-4"> Email: {{$footer[0]->email}} </p>

		  
        </div>
		
      </div>
    </div>
  </div>
  <div class="bottom-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 text-lg-left text-center mb-lg-0 mb-3">
          <p class="copyright">{{$footer[0]->copyright}}  </p>
        </div>
        <div class="col-lg-4 align-center text-lg-right text-center">
          <a href="#facebook" class="social-item"><span class="fa fa-facebook-f"></span></a>
          <a href="#twitter" class="social-item"><span class="fa fa-twitter"></span></a>
          <a href="#linkedin" class="social-item"><span class="fa fa-linkedin"></span></a>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- //site footer -->