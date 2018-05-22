@extends('layouts.app')

@section('content')
<section class="hero-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="block">
					<h1 class="wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s" >We are smart <br> Creative Agency</h1>
					<p class="wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".5s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla, ad rerum repellat. Sequi, labore, illo. Ducimus voluptates quidem obcaecati, ad.</p>
					<div class="text-center col-md-8 col-md-offset-2 model">
						<br>
					<form class="form-group" role="search" action="{{url('search')}}" method="get">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Skills" name="skill">
						</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Location" name="location">
							</div>
									<button class="btn btn-default" type="submit"> Search &nbsp; &nbsp;<i class="fa fa-search fa-lg "></i></button>
					</form>
				</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="service-2 section">
  <div class="container">
    <div class="row">

      <!-- section title -->
      <div class="title text-center"  >
        <h2>What Do We Offer</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, earum. </p>
        <div class="border"></div>
      </div>
      <!-- /section title -->
      <div class="col-md-10">
        <div class="row text-center">
          <div class="col-md-4 col-sm-4 col-xs-12">
						<a href="{{url('profile/'.$skill='plumber')}}">
            <div class="service-item">
              <i class="fa fa-wrench"></i>
              <h4>Plumber Services </h4>
              <p><b>Looking for a Plumber?</b> We offer a premium plumbing service in Islamabad. No job is too small or big for us. Our Plumbers are skilled, trained and professional, and can do any kind of plumbing job for you.</p>
            </div>
					</a>
          </div><!-- END COL -->
					<div class="col-md-4 col-sm-4 col-xs-12">
          <a href="{{url('profile/'.$skill='electrical')}}"> <div class="service-item">
              <i class="fa fa-bolt"></i>
              <h4>Electrician</h4>
              <p><b>Electricians install </b> and maintain all of the electrical and power systems for our homes, businesses, and factories. They install and maintain the wiring and control equipment through which electricity flows. </p>
            </div>
						</a>
          </div><!-- END COL -->
					<div class="col-md-4 col-sm-4 col-xs-12">
						<a href="{{url('profile/'.$skill='Carpenter')}}">
            <div class="service-item">
              <i class="fa fa-gavel"></i>
              <h4>Carpenter</h4>
              <p>Carpenter. Carpenters construct and repair building frameworks and structures—such as stairways, doorframes, partitions, and rafters—made from wood and other materials. They also may install kitchen cabinets, siding, and drywall.</p>
            </div>
					</a>
          </div><!-- END COL -->
          <div class="col-md-4 col-sm-4 col-xs-12">
						<a href="{{url('profile/'.$skill='Mechanic')}}">
            <div class="service-item">
              <i class="fa fa-bus"></i>
              <h4>Auto Mechanic</h4>
              <p>An auto mechanic performs maintenance, diagnostic testing, repairs, and inspections of small trucks and cars. They work on engines, drive belts, transmissions, and electronic systems such as steering, brakes, and accident-avoidance systems.</p>
            </div>
					</a>
          </div><!-- END COL -->
          <div class="col-md-4 col-sm-4 col-xs-12">
						<a href="{{url('profile/'.$skill='electrical')}}">
            <div class="service-item">
              <i class="tf-ion-ios-email-outline"></i>
              <h4>Mail Support</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis.</p>
            </div>
					</a>
          </div><!-- END COL -->
          <div class="col-md-4 col-sm-4 col-xs-12">
						<a href="{{url('profile/'.$skill='electrical')}}">
            <div class="service-item">
              <i class="tf-ion-ios-locked-outline"></i>
              <h4>Secure System</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae risus nec dui venenatis.</p>
            </div>
					</a>
          </div><!-- END COL -->
        </div>
      </div>
    </div>    <!-- End row -->
  </div>    <!-- End container -->
</section>   <!-- End section -->

<!--
Start About Section
==================================== -->
<section class="about-2 section" id="about">
	<div class="container">
		<div class="row">

			<!-- section title -->
			<div class="title text-center"  >
				<h2>We Are Bingo Agency</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam reprehenderit accusamus labore iusto, aut, eum itaque illo totam tempora eius.</p>
				<div class="border"></div>
			</div>
			<!-- /section title -->

			<div class="col-md-6">
				<img src="images/about/about-2.png" class="img-responsive" alt="">
			</div>
			<div class="col-md-6">
				<ul class="checklist">
                    <li>Donec sed odio dui. Aenean eu leo quam. Pellentesque ornare sem laca quam venenatis vestibulum.</li>
                    <li>Aenean quam. Pellentesque ornare sem laca quam venenatis vestibulum.</li>
                    <li>Donec sed odio dui. Aenean eu leo quam. Pellentesque ornare sem laca quam venenatis vestibulum.</li>
                    <li>Etiam porta sem multipage evint landing magna mollis euismod a pharetra augue.</li>
                    <li>Aenean quam. Pellentesque ornare sem laca quam venenatis vestibulum.</li>
                </ul>
				<a href="#" class="btn btn-main mt-20">Learn More</a>
			</div>
		</div> 		<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section -->

<!--
Start Call To Action
==================================== -->
<section class="call-to-action section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2>Let's Create Something Together</h2>
				<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin bibendum auctor, <br> nisi elit consequat ipsum, nesagittis sem nid elit. Duis sed odio sitain elit.</p>
				<a href="" class="btn btn-main">Contact Us</a>
			</div>
		</div> 		<!-- End row -->
	</div>   	<!-- End container -->
</section>   <!-- End section -->

<!--
		Start Counter Section
		==================================== -->

		<section  class="counter-wrapper section-sm" >
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="title">
							<h2>Award-Winning Agency</h2>
							<p>Vestibulum nisl tortor, consectetur quis imperdiet bibendum, laoreet sed arcu. Sed condimentum iaculis ex, in faucibus lorem accumsan non. Donec mattis tincidunt metus. Morbi sed tortor a risus luctus dignissim.</p>
						</div>
					</div>
					<!-- first count item -->
					<div class="col-md-3 col-sm-6 col-xs-6 text-center " >
						<div class="counters-item">
							<i class="tf-ion-ios-alarm-outline"></i>
							<div>
							    <span class="counter" data-count="150">150</span>
							</div>
							<h3>Happy Clients</h3>
						</div>
					</div>
					<!-- end first count item -->

					<!-- second count item -->
					<div class="col-md-3 col-sm-6 col-xs-6 text-center " >
						<div class="counters-item">
							<i class="tf-ion-ios-analytics-outline"></i>
							<div>
							    <span class="counter" data-count="130">130</span>
							</div>
							<h3>Projects completed</h3>
						</div>
					</div>
					<!-- end second count item -->

					<!-- third count item -->
					<div class="col-md-3 col-sm-6 col-xs-6 text-center "  >
						<div class="counters-item">
							<i class="tf-ion-ios-compose-outline"></i>
							<div>
							    <span class="counter" data-count="99">99</span>
							</div>
				            <h3>Positive feedback</h3>

						</div>
					</div>
					<!-- end third count item -->

					<!-- fourth count item -->
					<div class="col-md-3 col-sm-6 col-xs-6 text-center ">
						<div class="counters-item kill-border">
							<i class="tf-ion-ios-bolt-outline"></i>
							<div>
							    <span class="counter" data-count="250">250</span>
							</div>
							<h3>Cups of Coffee</h3>
						</div>
					</div>
					<!-- end fourth count item -->
				</div> 		<!-- end row -->
			</div>   	<!-- end container -->
		</section>   <!-- end section -->

<!-- Start Testimonial
=========================================== -->

	<section class="testimonial section" id="testimonial">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- testimonial wrapper -->
					<div class="testimonial-slider">
						<!-- testimonial single -->
						<div class="item text-center">
							<i class="tf-ion-chatbubbles"></i>
							<!-- client info -->
							<div class="client-details">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum. Eos earum, magni asperiores, unde corporis labore, enim, voluptatum officiis voluptates alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?</p>
							</div>
							<!-- /client info -->
							<!-- client photo -->
							<div class="client-thumb">
								<img src="images/client-logo/clients-1.jpg" class="img-responsive" alt="">
							</div>
							<div class="client-meta">
								<h3>Abul Mal Muhit</h3>
								<span>CEO , Company Name</span>
							</div>
							<!-- /client photo -->
						</div>
						<!-- /testimonial single -->

						<!-- testimonial single -->
						<div class="item text-center">
							<i class="tf-ion-chatbubbles"></i>
							<!-- client info -->
							<div class="client-details">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum. Eos earum, magni asperiores, unde corporis labore, enim, voluptatum officiis voluptates alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?</p>
							</div>
							<!-- /client info -->
							<!-- client photo -->
							<div class="client-thumb">
								<img src="images/client-logo/clients-1.jpg" class="img-responsive" alt="">
							</div>
							<div class="client-meta">
								<h3>Abul Mal Muhit</h3>
								<span>CEO , Company Name</span>
							</div>
							<!-- /client photo -->
						</div>
						<!-- /testimonial single -->

						<!-- testimonial single -->
						<div class="item text-center">
							<i class="tf-ion-chatbubbles"></i>
							<!-- client info -->
							<div class="client-details">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum. Eos earum, magni asperiores, unde corporis labore, enim, voluptatum officiis voluptates alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, officia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?</p>
							</div>
							<!-- /client info -->
							<!-- client photo -->
							<div class="client-thumb">
								<img src="images/client-logo/clients-1.jpg" class="img-responsive" alt="">
							</div>
							<div class="client-meta">
								<h3>Abul Mal Muhit</h3>
								<span>CEO , Company Name</span>
							</div>
							<!-- /client photo -->
						</div>
						<!-- /testimonial single -->
					</div>
				</div> 		<!-- end col lg 12 -->
			</div>	    <!-- End row -->
		</div>       <!-- End container -->
	</section>    <!-- End Section -->

<!--
		Start Blog Section
		=========================================== -->

	<section class="blog" id="blog">
		<div class="container">
			<div class="row">

				<!-- section title -->
				<div class="title text-center ">
					<h2> Latest <span class="color">Posts</span></h2>
					<div class="border"></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus facere accusamus, reprehenderit libero inventore nam.</p>
				</div>
				<!-- /section title -->
				<!-- single blog post -->
				<article class="col-md-4 col-sm-6 col-xs-12 clearfix " >
					<div class="post-item">
						<div class="media-wrapper">
							<img src="images/blog/post-1.jpg" alt="amazing caves coverimage" class="img-responsive">
						</div>

						<div class="content">
							<h3><a href="single-post.html">Simple Image Post</a></h3>
							<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>
							<a class="btn btn-main" href="single-post.html">Read more</a>
						</div>
					</div>
				</article>
				<!-- /single blog post -->

				<!-- single blog post -->
				<article class="col-md-4 col-sm-6 col-xs-12 "  >
					<div class="post-item">
						<div class="media-wrapper">
							<img src="images/blog/post-2.jpg" alt="amazing caves coverimage" class="img-responsive">
						</div>

						<div class="content">
							<h3><a href="single-post.html">Simple Image Post</a></h3>
							<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>
							<a class="btn btn-main" href="single-post.html">Read more</a>
						</div>
					</div>
				</article>
				<!-- end single blog post -->

				<!-- single blog post -->
				<article class="col-md-4 col-sm-6 col-xs-12 "  >
					<div class="post-item">
						<div class="media-wrapper">
							<img src="images/blog/post-3.jpg" alt="amazing caves coverimage" class="img-responsive">
						</div>

						<div class="content">
							<h3><a href="single-post.html">Simple Image Post</a></h3>
							<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non skateboard dolor brunch.</p>
							<a class="btn btn-main" href="single-post.html">Read more</a>
						</div>
					</div>
				</article>
				<!-- end single blog post -->
			</div> <!-- end row -->
		</div> <!-- end container -->
	</section> <!-- end section -->

<footer id="footer" class="bg-one">
  <div class="top-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-3 col-lg-3">
          <h3>about</h3>
          <p>Integer posuere erat a ante venenati dapibus posuere velit aliquet. Fusce dapibus, tellus cursus commodo, tortor mauris sed posuere.</p>
        </div>
        <!-- End of .col-sm-3 -->

        <div class="col-sm-3 col-md-3 col-lg-3">
          <ul>
            <li><h3>Our Services</h3></li>
            <li><a href="#">Graphic Design</a></li>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

        <div class="col-sm-3 col-md-3 col-lg-3">
          <ul>
            <li><h3>Quick Links</h3></li>
            <li><a href="#">Partners</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">FAQ’s</a></li>
            <li><a href="#">Badges</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

        <div class="col-sm-3 col-md-3 col-lg-3">
          <ul>
            <li><h3>Connect with us Socially</h3></li>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Youtube</a></li>
            <li><a href="#">Pinterest</a></li>
          </ul>
        </div>
        <!-- End of .col-sm-3 -->

      </div>
    </div> <!-- end container -->
  </div>
  <div class="footer-bottom">
    <h5>Copyright 2016. All rights reserved.</h5>
    <h6>Design and Developed by <a href="">Themefisher</a></h6>
  </div>
</footer> <!-- end footer -->






<div class="container">
    <div class="row">
      @if(count($user)>0)
      @foreach($user as $users)
        <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="{{asset('images/builder.jpg')}}" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4><?php echo ucfirst($users->name); ?></h4>
                        <small><cite title="San Francisco, USA">{{$users->address}} <i class="glyphicon glyphicon-map-marker">
                        </i></cite></small>
                        <p>
                            <i class="glyphicon glyphicon-phone"></i>{{$users->phone}}
                            <br />
                            <i class="glyphicon glyphicon-globe"></i><a href="http://www.jquery2dotnet.com">www.jquery2dotnet.com</a>
                            <br />
                            <i class="glyphicon glyphicon-gift"></i>June 02, 1988</p>
                        <!-- Split button -->
                        <div class="">
                        <label>Skills</label>
                        <ul>
                          <li>{{$users->skill}}</li>
                        </ul>
                        <label>Experience</label>
                        <ul>
                          <li>{{$users->experience}}</li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div>
</div>

@endsection
