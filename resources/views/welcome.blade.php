<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Fox University - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('fox/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fox/css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ asset('fox/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fox/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fox/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('fox/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('fox/css/ionicons.min.css') }}">
    
    <link rel="stylesheet" href="{{ asset('fox/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('fox/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('fox/css/style.css') }}">
  </head>
  <body style="background:white;">
	  <div class="bg-top navbar-light">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-center align-items-stretch">
    			<div class="col-md-4 d-flex align-items-center py-4">
    				<a class="navbar-brand" href="index.html">ISIMA<span>University</span></a>
    			</div>
	    		<div class="col-lg-8 d-block">
		    		<div class="row d-flex">
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
					    	<div class="text">
					    		<span>Email</span>
						    	<span>youremail@email.com</span>
						    </div>
					    </div>
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <div class="text">
						    	<span>Call</span>
						    	<span>Call Us: + 1235 2355 98</span>
						    </div>
					    </div>
					    <div class="col-md topper d-flex align-items-center justify-content-end">
					    	<p class="mb-0">
					    		<a href="{{route('login')}}" class="btn py-2 px-3 btn-primary d-flex align-items-center justify-content-center">
					    			<span>Login</span>
					    		</a>
					    	</p>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
	  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center px-4">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <form action="#" class="searchform order-lg-last">
          <div class="form-group d-flex">
            <input type="text" class="form-control pl-3" placeholder="Search">
            <button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>
          </div>
        </form>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	        	<li class="nav-item active"><a href="index.html" class="nav-link pl-0">Home</a></li>
	        	<li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	        	<li class="nav-item"><a href="courses.html" class="nav-link">Courses</a></li>
	        	<li class="nav-item"><a href="teacher.html" class="nav-link">Staff</a></li>
	        	<li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
              <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
              
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url({{ asset('fox/images/bg_1.jpg') }} );">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
            <h1 class="mb-4">Education Needs Complete Solution</h1>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Contact Us</a></p>
          </div>
        </div>
        </div>
      </div>

      <div class="slider-item" style="background-image:url({{ asset('fox/images/bg_2.jpg') }});">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
            <h1 class="mb-4">University, College School Education</h1>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Contact Us</a></p>
          </div>
        </div>
        </div>
      </div>
    </section>

    <section class="ftco-services ftco-no-pb">
			<div class="container-wrap">
				<div class="row no-gutters">
          <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-teacher"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Certified Teachers</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-darken">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-reading"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Special Education</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-books"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Book &amp; Library</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-darken">
            <div class="media block-6 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-diploma"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Sport Clubs</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
        </div>
			</div>
		</section>
		
		<section class="ftco-section ftco-no-pt ftc-no-pb">
			<div class="container">
				<div class="row d-flex">
					<div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
						<div class="img" style="background-image: url({{ asset('fox/images/about.jpg') }}); border"></div>
					</div>
					<div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
          	<h2 class="mb-4">What We Offer</h2>
						<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word.</p>
						<div class="row mt-5">
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-security"></span></div>
									<div class="text pl-3">
										<h3>Safety First</h3>
										<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-reading"></span></div>
									<div class="text pl-3">
										<h3>Regular Classes</h3>
										<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-diploma"></span></div>
									<div class="text pl-3">
										<h3>Certified Teachers</h3>
										<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-education"></span></div>
									<div class="text pl-3">
										<h3>Sufficient Classrooms</h3>
										<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-jigsaw"></span></div>
									<div class="text pl-3">
										<h3>Creative Lessons</h3>
										<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-kids"></span></div>
									<div class="text pl-3">
										<h3>Sports Facilities</h3>
										<p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		

		<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2 d-flex">
    			<div class="col-md-6 align-items-stretch d-flex">
    				<div class="img img-video d-flex align-items-center" style="background-image: url(images/about-2.jpg);">
    					<div class="video justify-content-center">
								<a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
									<span class="ion-ios-play"></span>
		  					</a>
							</div>
    				</div>
    			</div>
          <div class="col-md-6 heading-section heading-section-white ftco-animate pl-lg-5 pt-md-0 pt-5">
            <h2 class="mb-4">Fox University</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
          </div>
        </div>	
    		<div class="row d-md-flex align-items-center justify-content-center">
    			<div class="col-lg-12">
    				<div class="row d-md-flex align-items-center">
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="18">0</strong>
		                <span>Certified Teachers</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="401">0</strong>
		                <span>Students</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="30">0</strong>
		                <span>Courses</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		            	<div class="icon"><span class="flaticon-doctor"></span></div>
		              <div class="text">
		                <strong class="number" data-number="50">0</strong>
		                <span>Awards Won</span>
		              </div>
		            </div>
		          </div>
	          </div>
          </div>
        </div>
    	</div>
    </section>


		<section class="ftco-section">
			<div class="container-fluid px-4">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>Our</span> Courses</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        </div>	
				<div class="row">
					<div class="col-md-3 course ftco-animate">
						<div class="img" style="background-image: url({{ asset('fox/images/course-1.jpg')}});"></div>
						<div class="text pt-4">
							<p class="meta d-flex">
								<span><i class="icon-user mr-2"></i>Mr. Khan</span>
								<span><i class="icon-table mr-2"></i>10 seats</span>
								<span><i class="icon-calendar mr-2"></i>4 Years</span>
							</p>
							<h3><a href="#">Electric Engineering</a></h3>
							<p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
							<p><a href="#" class="btn btn-primary">Apply now</a></p>
						</div>
					</div>
					<div class="col-md-3 course ftco-animate">
						<div class="img" style="background-image: url({{ asset('fox/images/course-2.jpg')}} );"></div>
						<div class="text pt-4">
							<p class="meta d-flex">
								<span><i class="icon-user mr-2"></i>Mr. Khan</span>
								<span><i class="icon-table mr-2"></i>10 seats</span>
								<span><i class="icon-calendar mr-2"></i>4 Years</span>
							</p>
							<h3><a href="#">Electric Engineering</a></h3>
							<p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
							<p><a href="#" class="btn btn-primary">Apply now</a></p>
						</div>
					</div>
					<div class="col-md-3 course ftco-animate">
						<div class="img" style="background-image: url({{ asset('fox/images/course-3.jpg') }});"></div>
						<div class="text pt-4">
							<p class="meta d-flex">
								<span><i class="icon-user mr-2"></i>Mr. Khan</span>
								<span><i class="icon-table mr-2"></i>10 seats</span>
								<span><i class="icon-calendar mr-2"></i>4 Years</span>
							</p>
							<h3><a href="#">Electric Engineering</a></h3>
							<p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
							<p><a href="#" class="btn btn-primary">Apply now</a></p>
						</div>
					</div>
					<div class="col-md-3 course ftco-animate">
						<div class="img" style="background-image: url({{ asset('fox/images/course-4.jpg') }});"></div>
						<div class="text pt-4">
							<p class="meta d-flex">
								<span><i class="icon-user mr-2"></i>Mr. Khan</span>
								<span><i class="icon-table mr-2"></i>10 seats</span>
								<span><i class="icon-calendar mr-2"></i>4 Years</span>
							</p>
							<h3><a href="#">Electric Engineering</a></h3>
							<p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
							<p><a href="#" class="btn btn-primary">Apply now</a></p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section bg-light">
			<div class="container-fluid px-4">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4">Certified Teachers</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        </div>	
				<div class="row">
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url({{ asset('fox/images/teacher-1.jpg')}});"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>Bianca Wilson</h3>
								<span class="position mb-2">Teacher</span>
								<div class="faded">
									<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url({{ asset('fox/images/teacher-2.jpg') }} );"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>Mitch Parker</h3>
								<span class="position mb-2">English Teacher</span>
								<div class="faded">
									<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url({{ asset('fox/images/teacher-3.jpg') }});"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>Stella Smith</h3>
								<span class="position mb-2">Art Teacher</span>
								<div class="faded">
									<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url({{ asset('fox/images/teacher-4.jpg') }});"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>Monshe Henderson</h3>
								<span class="position mb-2">Science Teacher</span>
								<div class="faded">
									<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


    <section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url({{ asset('fox/images/bg_5.jpg') }});" data-stellar-background-ratio="0.5">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row justify-content-end">
    			<div class="col-md-6 py-5 px-md-5">
    				<div class="py-md-5">
		          <div class="heading-section heading-section-white ftco-animate mb-5">
		            <h2 class="mb-4">Request A Quote</h2>
		            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
		          </div>
		          <form action="#" class="appointment-form ftco-animate">
		    				<div class="d-md-flex">
			    				<div class="form-group">
			    					<input type="text" class="form-control" placeholder="First Name">
			    				</div>
			    				<div class="form-group ml-md-4">
			    					<input type="text" class="form-control" placeholder="Last Name">
			    				</div>
		    				</div>
		    				<div class="d-md-flex">
		    					<div class="form-group">
			    					<div class="form-field">
		        					<div class="select-wrap">
		                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
		                    <select name="" id="" class="form-control">
		                    	<option value="">Select Your Course</option>
		                      <option value="">Art Lesson</option>
		                      <option value="">Language Lesson</option>
		                      <option value="">Music Lesson</option>
		                      <option value="">Sports</option>
		                      <option value="">Other Services</option>
		                    </select>
		                  </div>
			              </div>
			    				</div>
		    					<div class="form-group ml-md-4">
			    					<input type="text" class="form-control" placeholder="Phone">
			    				</div>
		    				</div>
		    				<div class="d-md-flex">
		    					<div class="form-group">
			              <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
			            </div>
			            <div class="form-group ml-md-4">
			              <input type="submit" value="Request A Quote" class="btn btn-primary py-3 px-4">
			            </div>
		    				</div>
		    			</form>
		    		</div>
    			</div>
        </div>
    	</div>
    </section>

		<section class="ftco-section bg-light">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>Recent</span> Blog</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        </div>
				<div class="row">
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('{{ asset('fox/images/image_1.jpg') }}');">
								<div class="meta-date text-center p-2">
                  <span class="day">26</span>
                  <span class="mos">June</span>
                  <span class="yr">2019</span>
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="#">Skills To Develop Your Child Memory</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="d-flex align-items-center mt-4">
	                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('{{ asset('fox/images/image_2.jpg')}}');">
								<div class="meta-date text-center p-2">
                  <span class="day">26</span>
                  <span class="mos">June</span>
                  <span class="yr">2019</span>
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="#">Skills To Develop Your Child Memory</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="d-flex align-items-center mt-4">
	                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20 d-flex align-items-end" style="background-image: url('{{ asset('fox/images/image_3.jpg')}}');">
								<div class="meta-date text-center p-2">
                  <span class="day">26</span>
                  <span class="mos">June</span>
                  <span class="yr">2019</span>
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="#">Skills To Develop Your Child Memory</a></h3>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="d-flex align-items-center mt-4">
	                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                <p class="ml-auto mb-0">
	                	<a href="#" class="mr-2">Admin</a>
	                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
	                </p>
                </div>
              </div>
            </div>
          </div>
        </div>
			</div>
		</section>

		<section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4">Student Says About Us</h2>
            <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
          </div>
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url({{ asset('fox/images/teacher-1.jpg')}})">
                  </div>
                  <div class="text ml-2">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Racky Henderson</p>
                    <span class="position">Father</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url({{ asset('fox/images/teacher-2.jpg')}})">
                  </div>
                  <div class="text ml-2">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Henry Dee</p>
                    <span class="position">Mother</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url({{ asset('fox/images/teacher-3.jpg')}})">
                  </div>
                  <div class="text ml-2">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Mark Huff</p>
                    <span class="position">Mother</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url({{ asset('fox/images/teacher-4.jpg')}})">
                  </div>
                  <div class="text ml-2">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Rodel Golez</p>
                    <span class="position">Mother</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap d-flex">
                  <div class="user-img mr-4" style="background-image: url({{ asset('fox/images/teacher-1.jpg')}})">
                  </div>
                  <div class="text ml-2">
                  	<span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Ken Bosh</p>
                    <span class="position">Mother</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-gallery">
    	<div class="container-wrap">
    		<div class="row no-gutters">
					<div class="col-md-3 ftco-animate">
						<a href="{{ asset('fox/images/image_1.jpg')}}" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{ asset('fox/images/course-1.jpg')}});">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="{{ asset('fox/images/image_2.jpg')}}" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{ asset('fox/images/image_2.jpg')}});">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="{{ asset('fox/images/image_3.jpg')}}" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{ asset('fox/images/image_3.jpg')}});">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="{{ asset('fox/images/image_4.jpg')}}" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{ asset('fox/images/image_4.jpg')}});">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
        </div>
    	</div>
    </section>

		
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">Recent Blog</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url({{ asset('fox/images/image_1.jpg')}});"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> June 27, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-5 d-flex">
                <a class="blog-img mr-4" style="background-image: url({{ asset('fox/images/image_2.jpg')}} );"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> June 27, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Services</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Deparments</a></li>
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Subscribe Us!</h2>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
                  <input type="submit" value="Subscribe" class="form-control submit px-3">
                </div>
              </form>
            </div>
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2 mb-0">Connect With Us</h2>
            	<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
	</footer>
	<div class="content">
        <div class="logo">
            <svg viewBox="0 0 225 212" width="300" height="300" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><style>.st0{fill:url(#SVGID_1_);} .st1{fill:url(#SVGID_2_);} .st2{fill:url(#SVGID_3_);} .st3{fill:url(#SVGID_4_);} .st5{fill:#FDD800;} .st6{fill:none;stroke:#231F20;stroke-width:7;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st7{fill:none;stroke:#EB0D8C;stroke-width:7;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st8{fill:none;stroke:#4EC3C8;stroke-width:7;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st9{fill:#FFFFFF;stroke:#4EC3C8;stroke-width:7;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st10{fill:#4EC3C8;} .st11{fill:none;stroke:#49C8F5;stroke-width:7;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st12{fill:none;stroke:#FEDA00;stroke-width:7;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st13{fill:#231F20;} .st14{fill:#DBDAD9;stroke:#193946;stroke-width:7;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st15{fill:none;stroke:#193946;stroke-width:7;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st16{fill:#F8B232;stroke:#193946;stroke-width:7;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st17{fill:#FFFFFF;stroke:#193946;stroke-width:7;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st18{fill:#193946;} .st19{fill:none;stroke:#F1F2F2;stroke-width:4;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st20{clip-path:url(#XMLID_10_);fill:none;stroke:#E4E5E6;stroke-width:33;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st21{clip-path:url(#XMLID_11_);fill:none;stroke:#E4E5E6;stroke-width:33;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st22{clip-path:url(#XMLID_11_);fill:none;stroke:#E4E5E6;stroke-width:25;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st23{clip-path:url(#XMLID_12_);fill:none;stroke:#BE8A25;stroke-width:4;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st24{clip-path:url(#XMLID_13_);fill:none;stroke:#BE8A25;stroke-width:5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st25{fill:none;stroke:#F1F2F2;stroke-width:3;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st26{fill:none;stroke:#F8B232;stroke-width:7;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st27{clip-path:url(#XMLID_14_);fill:none;stroke:#E4E5E6;stroke-width:33;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st28{clip-path:url(#XMLID_15_);fill:none;stroke:#E4E5E6;stroke-width:33;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st29{clip-path:url(#XMLID_15_);fill:none;stroke:#E4E5E6;stroke-width:25;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st30{clip-path:url(#XMLID_16_);fill:none;stroke:#BE8A25;stroke-width:4;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st31{clip-path:url(#XMLID_17_);fill:none;stroke:#BE8A25;stroke-width:5;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st32{fill:#FEDA00;} .st33{fill:#FFFFFF;stroke:#FEDA00;stroke-width:7;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st34{fill:#49C8F5;} .st35{fill:#EB0D8C;} .st36{fill:#FFFFFF;stroke:#EB0D8C;stroke-width:7;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st37{fill:#F8B232;} .st38{fill:#FFFFFF;stroke:#F8B232;stroke-width:7;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st39{fill:#DBDAD9;} .st40{fill:none;stroke:#DBDAD9;stroke-width:7;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st41{fill:#FFFFFF;stroke:#DBDAD9;stroke-width:7;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;} .st42{fill:#DBDAD9;stroke:#193946;stroke-width:6;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}</style><title>background</title><path fill="none" id="canvas_background" d="M-1-1h227v214H-1z"/><title>Layer 1</title><g id="Layer_2"><path id="svg_2" d="M62.9 40.3c1.6-5 7.9-8.6 13.5-7.6" class="st15"/><path id="svg_3" d="M184.6 34.1c4.9-2 11.7.5 14.5 5.4" class="st15"/><path id="svg_4" d="M165.9 117.9c.7-.1 1.2-.2 2-.2 6.2 0 11.2 5 11.2 11.2 0 6.2-5 11.2-11.2 11.2-.7 0-1.3-.1-2-.2" class="st14"/><path id="svg_5" d="M94.2 117.9c-.7-.1-1.2-.2-2-.2-6.2 0-11.2 5-11.2 11.2 0 6.2 5 11.2 11.2 11.2.7 0 1.3-.1 2-.2" class="st14"/><path id="svg_17" d="M109.2 45.4c.2-14.6 3.8-20 9.5-24.5" class="st14"/><circle id="svg_18" r="7.7" cy="13.3" cx="126.3" class="st16"/><g id="svg_19"><defs transform="translate(-62 -82.5)"><path d="M218.5 246.9h-53.2c-4.8 0-8.7-3.9-8.7-8.7v-42.3h70.6v42.3c0 4.8-3.9 8.7-8.7 8.7z" id="XMLID_4_"/></defs><use x="-62" y="-82.5" id="svg_20" fill="#DBDAD9" xlink:href="#XMLID_4_"/><clipPath transform="translate(-62 -82.5)" id="XMLID_10_"><use id="svg_21" xlink:href="#XMLID_4_"/></clipPath><use x="-62" y="-82.5" id="svg_23" fill="none" stroke="#193946" stroke-width="7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" xlink:href="#XMLID_4_"/></g><path id="svg_24" class="st14" d="M146 133.2l10.8.1"/><path id="svg_25" d="M179.6 127.8c16.6 0 20.8 20.1 20.8 20.1" class="st15"/><path id="svg_26" class="st15" d="M215.9 163l-.2-11.1-15.2-4-11.9 11.2 8.6 11.1"/><path id="svg_27" d="M80.8 132c-14.6 7.9-29-9.6-29-9.6" class="st15"/><path id="svg_28" class="st15" d="M31.1 116.6l5.4 9.6 15.3-3.7 5.1-15.6-12.9-5.5"/><path id="svg_29" class="st14" d="M108.1 164.4h15v26.8h-15z"/><path id="svg_30" class="st14" d="M138.6 164.4h15v26.8h-15z"/><path id="svg_31" d="M168.2 203.8h-29.6v-12.6h22.1c4.1 0 7.5 3.3 7.5 7.5v5.1z" class="st14"/><path id="svg_32" d="M93.3 203.8h29.8v-12.6h-22.3c-4.1 0-7.5 3.3-7.5 7.5v5.1z" class="st14"/><g id="svg_33"><g id="svg_34"><defs transform="translate(-62 -82.5)"><path d="M246.8 184.5H139.7c-2.8 0-5.1-2.3-5.1-5.1v-46.3c0-2.8 2.3-5.1 5.1-5.1h107.2c2.8 0 5.1 2.3 5.1 5.1v46.3c0 2.8-2.3 5.1-5.2 5.1z" id="XMLID_3_"/></defs><use x="-62" y="-82.5" id="svg_35" fill="#DBDAD9" xlink:href="#XMLID_3_"/><clipPath transform="translate(-62 -82.5)" id="XMLID_11_"><use id="svg_36" xlink:href="#XMLID_3_"/></clipPath><use x="-62" y="-82.5" id="svg_39" fill="none" stroke="#193946" stroke-width="7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" xlink:href="#XMLID_3_"/></g><path id="svg_40" d="M147.4 74.5c-3.8 4.5-9.5 7.3-15.9 7.3-6.7 0-12.7-3.1-16.5-8" class="st15"/></g><g id="svg_45"><path id="svg_46" d="M53.9 65.6c7.1 8.2 6.3 20.7-1.9 27.8l-1.5 1.2c-.4.3-.8.6-1.3.8-2.2 1.3-3.6 3.4-4.1 5.9l-4.7 28.1c-.4 2.5.3 5 1.9 6.9 7 8.3 5.9 20.8-2.5 27.7-.4.3-.8.7-1.3 1-.5.4-1.1.7-1.6 1-1.3.7-2.9.7-4.1-.2-1.3-.9-1.9-2.4-1.6-3.9l1.4-8c.3-1.7-.8-3.3-2.5-3.5l-6.1-1c-1.7-.2-3.2.9-3.5 2.5l-1.4 8c-.3 2.1-2.3 3.6-4.5 3.3-.9-.1-1.7-.6-2.3-1.3-7.1-8.2-6.2-20.7 2-27.8l1.5-1.2c.4-.3.8-.6 1.3-.8 2.2-1.3 3.6-3.4 4.1-5.9l4.7-28.1c.4-2.5-.3-5-1.9-6.9-7-8.3-5.9-20.8 2.5-27.7.9-.7 1.8-1.4 2.9-2 1.3-.8 2.9-.7 4.1.2 1.3.9 1.9 2.4 1.6 3.9l-1.4 8.1c-.3 1.7.8 3.2 2.5 3.5l6.1 1c1.7.2 3.2-.9 3.5-2.5l1.4-8c.3-2.1 2.3-3.6 4.5-3.3.8.1 1.6.5 2.2 1.2z" class="st7"/></g><path id="svg_47" class="st14" d="M56.9 106.9L44 101.4"/><g id="svg_51"><defs transform="translate(-62 -82.5)"><path id="XMLID_2_" d="M201.9 195.9l-8.7 5.3-8-5.3 1.7-11.4h13.5z"/></defs><use x="-62" y="-82.5" id="svg_52" fill="#F8B232" xlink:href="#XMLID_2_"/><clipPath transform="translate(-62 -82.5)" id="XMLID_12_"><use id="svg_53" xlink:href="#XMLID_2_"/></clipPath><use x="-62" y="-82.5" id="svg_55" fill="none" stroke="#193946" stroke-width="7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" xlink:href="#XMLID_2_"/></g><g id="svg_56"><defs transform="translate(-62 -82.5)"><path id="XMLID_1_" d="M193.2 200.4l9.3 27.4-9.3 11.1-10-11.1z"/></defs><use x="-62" y="-82.5" id="svg_57" fill="#F8B232" xlink:href="#XMLID_1_"/><clipPath transform="translate(-62 -82.5)" id="XMLID_13_"><use id="svg_58" xlink:href="#XMLID_1_"/></clipPath><use x="-62" y="-82.5" id="svg_61" fill="none" stroke="#193946" stroke-width="7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" xlink:href="#XMLID_1_"/></g><path id="svg_62" class="st19" d="M142.9 156.4h-1.1"/><path id="svg_63" class="st25" d="M147.4 177.8v-7.6"/><path id="svg_64" d="M157.1 143.6v9.1c0 2-1.7 3.7-3.7 3.7h-4.9" class="st19"/><path id="svg_65" class="st19" d="M108.1 121.4H103v4.1"/></g><g id="svg_68"><path id="svg_67" d="M173.4 68.8c0 6.3-.6 11.5-6.4 11.5s-6.4-5.1-6.4-11.5 1.2-11.5 6.4-11.5c5.2.1 6.4 5.2 6.4 11.5z" class="st18"/></g><g id="svg_70"><path id="svg_69" d="M102.4 69.8c0 6.3-.6 11.5-6.4 11.5s-6.4-5.1-6.4-11.5 1.2-11.5 6.4-11.5c5.2.1 6.4 5.2 6.4 11.5z" class="st18"/></g></svg>
        </div>

        
    </div>
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ asset('fox/js/jquery.min.js') }}"></script>
  <script src="{{ asset('fox/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('fox/js/popper.min.js') }}"></script>
  <script src="{{ asset('fox/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('fox/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('fox/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('fox/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('fox/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('fox/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('fox/js/aos.js') }}"></script>
  <script src="{{ asset('fox/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('fox/js/scrollax.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset('fox/js/google-map.js') }}"></script>
  <script src="{{ asset('fox/js/main.js') }}"></script>
    
  </body>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css">
  <script>
	  var botmanWidget = {
		  aboutText: 'ssdsd',
		  introMessage: "✋ Hi! I'm form codechief.org"
	  };
  </script>

  <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
	
</html>