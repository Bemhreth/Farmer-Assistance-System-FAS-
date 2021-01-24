
   @extends('templates.app')

   @section('content')
   
	
	
    
    <div class="hero-wrap img" style="background-image: url({{asset('storage/assets/images/bg1.jpg')}})">
      <div class="overlay"></div>
      <div class="container">
      	<div class="row d-md-flex no-gutters slider-text align-items-center justify-content-center">
	        <div class="3col-md-10 d-flex align-items-center ftco-animate">
	        	<div class="text text-center pt-5 mt-md-5">
	        		<p class="mb-4">Find Consultation, Machinery, and Skilled Man Power</p>
	            <h1 class="mb-5">Get Your Farming One Step Ahead</h1>
							<div class="ftco-counter ftco-no-pt ftco-no-pb">
			        	<div class="row">
				          <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
				            <div class="block-18">
				              <div class="text d-flex">
				              	<div class="icon mr-2">
				              		<span class="flaticon-worldwide"></span>
				              	</div>
				              	<div class="desc text-left">
					                <strong class="number" data-number="14">0</strong>
					                <span>Countries</span>
				                </div>
				              </div>
				            </div>
				          </div>
				          <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
				            <div class="block-18 text-center">
				              <div class="text d-flex">
				              	<div class="icon mr-2">
				              		<span class="flaticon-visitor"></span>
				              	</div>
				              	<div class="desc text-left">
					                <strong class="number" data-number="135">0</strong>
					                <span>Companies</span>
					              </div>
				              </div>
				            </div>
				          </div>
				          <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
				            <div class="block-18 text-center">
				              <div class="text d-flex">
				              	<div class="icon mr-2">
				              		<span class="flaticon-resume"></span>
				              	</div>
				              	<div class="desc text-left">
					                <strong class="number" data-number="10000">0</strong>
					                <span>Individual Freelancers</span>
					              </div>
				              </div>
				            </div>
				          </div>
				        </div>
			        </div>
							<div class="ftco-search my-md-5">
								<div class="row">
			            <div class="col-md-12 nav-link-wrap">
				            <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				              <a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Find a Machinery</a>

				              <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Find a Candidate</a>

				            </div>
				          </div>
				          <div class="col-md-12 tab-wrap">
				            
				            <div class="tab-content p-4" id="v-pills-tabContent">

				              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
				              	<form action="#" class="search-job">
				              		<div class="row no-gutters">
				              			<div class="col-md mr-md-2">
				              				<div class="form-group">
					              				<div class="form-field">
					              					<div class="icon"><span class="icon-briefcase"></span></div>
									                <input type="text" class="form-control" placeholder="eg. Tractor. Milking Machine">
									              </div>
								              </div>
				              			</div>
				              			<div class="col-md mr-md-2">
				              				<div class="form-group">
				              					<div class="form-field">
					              					<div class="select-wrap">
							                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
							                      <select name="" id="" class="form-control">
							                      	<option value="">Duration</option>
													  <option value="">Contract</option>
													  <option value="">For a Day</option>
							                        <option value="">For a Week</option>
							                        <option value="">For a Month</option>
							                      </select>
							                    </div>
									              </div>
								              </div>
				              			</div>
				              			<div class="col-md mr-md-2">
				              				<div class="form-group">
				              					<div class="form-field">
					              					<div class="icon"><span class="icon-map-marker"></span></div>
									                <input type="text" class="form-control" placeholder="Location">
									              </div>
								              </div>
				              			</div>
				              			<div class="col-md">
				              				<div class="form-group">
				              					<div class="form-field">
								                	<button type="submit" class="form-control btn btn-primary">Search</button>
									              </div>
								              </div>
				              			</div>
				              		</div>
				              	</form>
				              </div>

				              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-performance-tab">
				              	<form action="#" class="search-job">
				              		<div class="row">
				              			<div class="col-md">
				              				<div class="form-group">
					              				<div class="form-field">
					              					<div class="icon"><span class="icon-user"></span></div>
									                <input type="text" class="form-control" placeholder="eg. Adam Scott">
									              </div>
								              </div>
				              			</div>
				              			<div class="col-md">
				              				<div class="form-group">
				              					<div class="form-field">
					              					<div class="select-wrap">
							                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
							                      <select name="" id="" class="form-control">
							                      	<option value="">Category</option>
							                      	<option value="">Full Time</option>
							                        <option value="">Part Time</option>
							                        <option value="">Freelance</option>
							                        <option value="">Internship</option>
							                        <option value="">Temporary</option>
							                      </select>
							                    </div>
									              </div>
								              </div>
				              			</div>
				              			<div class="col-md">
				              				<div class="form-group">
				              					<div class="form-field">
					              					<div class="icon"><span class="icon-map-marker"></span></div>
									                <input type="text" class="form-control" placeholder="Location">
									              </div>
								              </div>
				              			</div>
				              			<div class="col-md">
				              				<div class="form-group">
				              					<div class="form-field">
									                <button type="submit" class="form-control btn btn-primary">Search</button>
									              </div>
								              </div>
				              			</div>
				              		</div>
				              	</form>
				              </div>
				            </div>
				          </div>
				        </div>
			        </div>
	          </div>
	        </div>
	    	</div>
      </div>
    </div>
	
	\<section class="ftco-section ftco-no-pt ftco-no-pb">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="category-wrap">
    					<div class="row no-gutters">
    						<div class="col-md-2">
    							<div class="top-category text-center no-border-left">
    								<h3><a href="#">Weather Data &amp; Forecasting</a></h3>
    								<span class="icon flaticon-contact"></span>
    								<!-- <p><span class="number">143</span> <span>Open position</span></p> -->
    							</div>
    						</div>
    						<div class="col-md-2">
    							<div class="top-category text-center active">
    								<h3><a href="#">Consultation by Professionals </a></h3>
    								<span class="icon flaticon-mortarboard"></span>
    								<!-- <p><span class="number">143</span> <span>Open position</span></p> -->
    							</div>
    						</div>
    						<div class="col-md-2">
    							<div class="top-category text-center">
    								<h3><a href="#">Farmer to Man Power</a></h3>
    								<span class="icon flaticon-idea"></span>
    								<!-- <p><span class="number">143</span> <span>Open position</span></p> -->
    							</div>
    						</div>
    						<div class="col-md-2">
    							<div class="top-category text-center">
    								<h3><a href="#">Farmer to Company</a></h3>
    								<span class="icon flaticon-accounting"></span>
    								<!-- <p><span class="number">143</span> <span>Open position</span></p> -->
    							</div>
    						</div>
    						<div class="col-md-2">
    							<div class="top-category text-center">
    								<h3><a href="#">Works Online &amp; Offline</a></h3>
    								<span class="icon flaticon-dish"></span>
    								<!-- <p><span class="number">143</span> <span>Open position</span></p> -->
    							</div>
    						</div>
    						<div class="col-md-2">
    							<div class="top-category text-center">
    								<h3><a href="#">Active Live Chat Center</a></h3>
    								<span class="icon flaticon-stethoscope"></span>
    								<!-- <p><span class="number">143</span> <span>Open position</span></p> -->
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
	</section>
	

	 


 <!--? Our Services Start -->
 <section class="our-services  section-padding40">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-8 col-lg-8">
				<!-- Section Tittle -->
				<div class="section-tittle text-center mb-80">
					<h2>Get a free access to our<span style="color:#367FFF ;"> Services</span> </h2>
					<p>The automated process starts as soon as your clothes go into the machine. The outcome is 
					gleaming clothes. Placeholder text commonly used.</p>
				</div>
			</div>
		</div>
		<div class="row no-gutters">
			<div class=" col-lg-4 col-md-6 col-sm-6">
				<div class="single-services">
					<div class="services-ion">
						<img src="{{asset('storage/assets/images/services1.svg')}}" alt="">
					</div>
					<div class="services-cap">
						<h5><a href="#">Consultancy</a></h5>
						<p>What is bothering you, reach out to professionals in the field here.</p>
						<a href="#" class="more-btn">Reach Out</a>
					</div>
				</div>
			</div>
			<div class=" col-lg-4 col-md-6 col-sm-6">
				<div class="single-services">
					<div class="services-ion">
						<img src="{{asset('storage/assets/images/services2.svg')}}" alt="">
					</div>
					<div class="services-cap">
						<h5><a href="#">Weather Forecasting</a></h5>
						<p>Save your works from unexpected climate change crisis.</p>
						<a href="#" class="more-btn">Be Alert</a>
					</div>
				</div>
			</div>
			<div class=" col-lg-4 col-md-6 col-sm-6">
				<div class="single-services">
					<div class="services-ion">
						<img src="{{asset('storage/assets/images/services3.svg')}}" alt="">
					</div>
					<div class="services-cap">
						<h5><a href="#">Agricultural Recommendations</a></h5>
						<p>Boost the Productivity of Your Farm With Recommendations Based on Your Soil Type.</p>
						<a href="#" class="more-btn">Recommend Me</a>
					</div>
				</div>
			</div>
			<div class=" col-lg-4 col-md-6 col-sm-6">
				<div class="single-services">
					<div class="services-ion">
						<img src="{{asset('storage/assets/images/services4.svg')}}" alt="">
					</div>
					<div class="services-cap">
						<h5><a href="#">Farmer to Skilled Man Power</a></h5>
						<p>Search and hire a skilled man-power on out platform.</p>
						<a href="#" class="more-btn">Connect Me</a>
					</div>
				</div>
			</div>
			<div class=" col-lg-4 col-md-6 col-sm-6">
				<div class="single-services">
					<div class="services-ion">
						<img src="{{asset('storage/assets/images/services5.svg')}}" alt="">
					</div>
					<div class="services-cap">
						<h5><a href="#">Farmer to Company</a></h5>
						<p>We Make Your Work Easy by Let you a Machinery r One-Click Away.</p>
						<a href="#" class="more-btn">Connect Me</a>
					</div>
				</div>
			</div>
			<div class=" col-lg-4 col-md-6 col-sm-6">
				<div class="single-services">
					<div class="services-ion">
						<img src="{{asset('storage/assets/images/services6.svg')}}" alt="">
					</div>
					<div class="services-cap">
						<h5><a href="#">Real-Time Data Report </a></h5>
						<p>We provide a real-time statistics.</p>
						<a href="#" class="more-btn">Read More</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--? About Area Start-->
<section class="about-area fix">
	<!--Right Contents  -->
	<div class="about-img">
		<!-- <div class="info-man text-center">
			<div class="head-cap">
				<h3>89027+</h3>
			</div>
			<p>Talented waiting for hire</p>
		</div> -->
	</div>
	<!-- left Contents -->
	<div class="about-details">
		<div class="right-caption">
			<!-- Section Tittle -->
			<div class="section-tittle mb-20">
				<h2>Want to hire perfect person?</h2>
			</div>
			<div class="about-more">
				<p class="mb-45 pera-bottom">Even though a skilled man power seems everywhere nowadays, the bridge to easily connect with them was not built until our platform came through! Hire individuals that suits your job position by simply browsing the list.</p>
				<a href="#" class="btn">Browse Talents</a>
			</div>
		</div>
	</div>
</section>
<!-- About Area End-->

<!--? job Post Start -->
<section class="job-post  pt-top section-bg2 section-padding40">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 ">
				<div class="single-features mb-40 pt-60">
					<div class="job-post-banner">
						<img src="{{asset('storage/assets/images/job-pos-banner1.png')}}" alt="">
					</div>
					<div class="features-caption">
						<h3>Register Machinery</h3>
						<p>If you have a good quality agricultural machine you can rent it here.</p>
						<a onclick="subscribe();" class="border-btn">Register a Machine</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6 ">
				<div class="single-features  single-features2 mb-40 pt-60">
					<div class="job-post-banner">
						<img src="{{asset('storage/assets/images/job-pos-banner2.png')}}" alt="">
					</div>
					<div class="features-caption">
						<h3>Browse</h3>
						<p>Get a wide range of choices among the registered machines.</p>
						<a href="rentmachinery.html" class="border-btn">Browse Machinery</a>
					</div>
				</div>
			</div>
		</div>  
	</div>
</section>
<!-- job Post End -->
<!-- <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeCasG_UBVZzOLnbr1q9F197GJF3S5EftuAtM9P6ga0B3uqKg/viewform?embedded=true" width="640" height="1946" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe> -->
<!-- Our Services End -->
<!-- 
    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Job Categories</span>
            <h2 class="mb-0">Top Categories</h2>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-3 ftco-animate">
        		<ul class="category text-center">
        			<li><a href="#">Web Development <br><span class="number">354</span> <span>Open position</span><i class="ion-ios-arrow-forward"></i></a></li>
        			<li><a href="#">Graphic Designer <br><span class="number">143</span> <span>Open position</span><i class="ion-ios-arrow-forward"></i></a></li>
        			<li><a href="#">Multimedia <br><span class="number">100</span> <span>Open position</span><i class="ion-ios-arrow-forward"></i></a></li>
        			<li><a href="#">Advertising <br><span class="number">90</span> <span>Open position</span><i class="ion-ios-arrow-forward"></i></a></li>
        		</ul>
        	</div>
        	<div class="col-md-3 ftco-animate">
        		<ul class="category text-center">
        			<li><a href="#">Education &amp; Training <br><span class="number">100</span> <span>Open position</span><i class="ion-ios-arrow-forward"></i></a></li>
        			<li><a href="#">English <br><span class="number">200</span> <span>Open position</span><i class="ion-ios-arrow-forward"></i></a></li>
        			<li><a href="#">Social Media <br><span class="number">300</span> <span>Open position</span><i class="ion-ios-arrow-forward"></i></a></li>
        			<li><a href="#">Writing <br><span class="number">150</span> <span>Open position</span><i class="ion-ios-arrow-forward"></i></a></li>
        		</ul>
        	</div>
        	<div class="col-md-3 ftco-animate">
        		<ul class="category text-center">
        			<li><a href="#">PHP Programming <br><span class="number">400</span> <span>Open position</span><i class="ion-ios-arrow-forward"></i></a></li>
        			<li><a href="#">Project Management <br><span class="number">100</span> <span>Open position</span><i class="ion-ios-arrow-forward"></i></a></li>
        			<li><a href="#">Finance Management <br><span class="number">222</span> <span>Open position</span><i class="ion-ios-arrow-forward"></i></a></li>
        			<li><a href="#">Office &amp; Admin <br><span class="number">123</span> <span>Open position</span><i class="ion-ios-arrow-forward"></i></a></li>
        		</ul>
        	</div>
        	<div class="col-md-3 ftco-animate">
        		<ul class="category text-center">
        			<li><a href="#">Web Designer <br><span class="number">324</span> <span>Open position</span></span><i class="ion-ios-arrow-forward"></i></a></li>
        			<li><a href="#">Customer Service <br><span class="number">564</span> <span>Open position</span><i class="ion-ios-arrow-forward"></i></a></li>
        			<li><a href="#">Marketing &amp; Sales <br><span class="number">234</span> <span>Open position</span><i class="ion-ios-arrow-forward"></i></a></li>
        			<li><a href="#">Software Development <br><span class="number">425</span> <span>Open position</span><i class="ion-ios-arrow-forward"></i></a></li>
        		</ul>
        	</div>
        </div>
    	</div>
    </section> -->

    <section class="ftco-section services-section">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-resume"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Increase Your Connections </h3>
                <p>Through our platform you get a benefit of building up your online presence.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-team"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Creating Job Opportunity</h3>
                <p>We create a bridge between a demand and supply.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-career"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Level Up Your Productivity</h3>
                <p>Data is power and we give that for free so you can boost your level of production.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-employees"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Get Expert's Mentorship</h3>
                <p>Get a professional consultation on how you can better your agricultural skill.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

	

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Our Blog</span>
            <h2><span>Recent</span> Blog</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('{{asset('storage/assets/images/image_1.jpg')}}')">
              </a>
              <div class="text mt-3">
              	<div class="meta mb-2">
                  <div><a href="#">August 28, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('{{asset('storage/assets/images/image_2.jpg')}}')">
              </a>
              <div class="text mt-3">
              	<div class="meta mb-2">
                  <div><a href="#">August 28, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url('{{asset('storage/assets/images/image_3.jpg')}}')">
              </a>
              <div class="text mt-3">
              	<div class="meta mb-2">
                  <div><a href="#">August 28, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="blog-single.html" class="block-20" style="background-image: url({{asset('storage/assets/images/image_4.jpg')}})">
              </a>
              <div class="text mt-3">
              	<div class="meta mb-2">
                  <div><a href="#">August 28, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
		 <!--? Testimonial Area Start -->
		 <section class="about-area2 testimonial-area fix">
			<div class="container">
				<div class="row align-items-center">
					<div class=" col-lg-6 col-md-9 col-sm-9">
						<div class="about-caption">
							<!-- Testimonial Start -->
							<div class="h1-testimonial-active dot-style">
								<!-- Single Testimonial -->
								<div class="single-testimonial">
									<div class="testimonial-caption">
										<img src="{{asset('storage/assets/images/quotes-sign.png')}}" alt="" class="quotes-sign">
										<p>Brook presents your services with flexible, convenient and cdpose layouts. You can select your favorite layouts & elements for cular ts with unlimited ustomization possibilities. Pixel-perfect replica;ition of thei designers ijtls intended csents your se.</p>
									</div>
									<!-- founder -->
									<div class="testimonial-founder d-flex align-items-center">
										<div class="founder-img">
											<img src="{{asset('storage/assets/images/Homepage_testi.png')}}" alt="">
										</div>
										<div class="founder-text">
											<span>Robart Brown</span>
											<p>Creative designer at Colorlib</p>
										</div>
									</div>
								</div>
								<!-- Single Testimonial -->
								<div class="single-testimonial">
									<div class="testimonial-caption">
										<img src="{{asset('storage/assets/images/quotes-sign.png')}}" alt="" class="quotes-sign">
										<p>Brook presents your services with flexible, convenient and cdpose layouts. You can select your favorite layouts & elements for cular ts with unlimited ustomization possibilities. Pixel-perfect replica;ition of thei designers ijtls intended csents your se.</p>
									</div>
									<!-- founder -->
									<div class="testimonial-founder d-flex align-items-center">
										<div class="founder-img">
											<img src="{{asset('storage/assets/images/Homepage_testi.png')}}" alt="">
										</div>
										<div class="founder-text">
											<span>Robart Brown</span>
											<p>Creative designer at Colorlib</p>
										</div>
									</div>
								</div>
							</div>
							<!-- Testimonial End -->
						</div>
					</div>
				</div>
			</div>
			<!-- about-img -->
			<div class="about-img2 pt-20">
				<img src="{{asset('storage/assets/images/testimonail.png')}}" alt="">
			</div>
		</section>
		<!--? Testimonial Area End -->
		<section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Subcribe to our Newsletter</h2>
              <p>Subscribe to get an alert when there is unexpected climate change, so that you can fight your way out from a big crisis.</p>
              <div class="row d-flex justify-content-center mt-4 mb-4">
                <div class="col-md-12">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

   @endsection