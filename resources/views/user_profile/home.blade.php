@extends('layouts.app')

@section('content')
<section class="hero-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="block">
					<div class="text-center">
					<h3 class="Message"  >Get Your Service Provider in Seconds </h3>
				</div>
					<div class="text-center col-md-8 col-md-offset-2 model">
						<br>
					<form class="form-group" role="search" action="{{url('search')}}" method="get">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Skills" name="skill">
						</div>
							<div class="form-group">

						    <div id="locationField">
						      <input id="autocomplete" name="location" class="form-control"  placeholder="Select your location" onFocus="geolocate()" type="text"></input>
						    </div>
							</div>
							<div class="form-group">
								<input class="field form-control" type="hidden" name="city"  id="locality"></input>
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
      <!-- Content Section -->
      <div class="title text-center"  >
        <h2>What Do We Offer</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, earum. </p>
        <div class="border"></div>
      </div>
      <!--  Services Section  -->
      <div class="col-md-10 col-md-offset-1">
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
          <a href="{{url('profile/'.$skill='electrician')}}"> <div class="service-item">
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
						<a href="{{url('profile/'.$skill='painter')}}">
            <div class="service-item">
							<i class="fa fa-paint-brush"></i>
              <h4>Painter</h4>
              <p>Wall Painter Service in your city. Service Provider can provide work related to the painting of homes and offices. We can paint and polish walls, partitions, etc.</p>
            </div>
					</a>
          </div><!-- END COL -->
          <div class="col-md-4 col-sm-4 col-xs-12">
						<a href="{{url('profile/'.$skill='welder')}}">
            <div class="service-item">
							<i class="fa fa-fire"></i>
              <h4>Welder</h4>
              <p>Welders primary duty is joining metal parts together. They work on metal components of a various of building or construction industries. Examples include but are not limited to pipelines, bridges, power-plants, or refineries.</p>
            </div>
					</a>
          </div><!-- END COL -->
        </div>
      </div> <!-- End Services Section  -->
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
				<!-- <img src="images/about/about-2.png" class="img-responsive" alt=""> -->
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
								<!-- <img src="images/client-logo/clients-1.jpg" class="img-responsive" alt=""> -->
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
							<!-- <img src="images/blog/post-1.jpg" alt="amazing caves coverimage" class="img-responsive"> -->
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
							<!-- <img src="images/blog/post-2.jpg" alt="amazing caves coverimage" class="img-responsive"> -->
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
							<!-- <img src="images/blog/post-3.jpg" alt="amazing caves coverimage" class="img-responsive"> -->
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
     
     <!-- ===================================== Script code here ================================= -->
<script>
	// This example displays an address form, using the autocomplete feature
	// of the Google Places API to help users fill in the information.

	// This example requires the Places library. Include the libraries=places
	// parameter when you first load the API. For example:
	// <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

	var placeSearch, autocomplete;
	var componentForm = {
		locality: 'long_name'
		// administrative_area_level_1: 'short_name',
		// country: 'long_name'
	};
	var user_latitude, user_longitude;
	function initAutocomplete() {
		// Create the autocomplete object, restricting the search to geographical
		// location types.
		autocomplete = new google.maps.places.Autocomplete(
				/** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
				{types: ['geocode']});

		// When the user selects an address from the dropdown, populate the address
		// fields in the form.
		autocomplete.addListener('place_changed', fillInAddress);
	}

	function fillInAddress() {
		// Get the place details from the autocomplete object.
		var place = autocomplete.getPlace();

		for (var component in componentForm) {
			document.getElementById(component).value = '';
			document.getElementById(component).disabled = false;
		}

		// Get each component of the address from the place details
		// and fill the corresponding field on the form.
		for (var i = 0; i < place.address_components.length; i++) {
			var addressType = place.address_components[i].types[0];
			if (componentForm[addressType]) {
				var val = place.address_components[i][componentForm[addressType]];
				document.getElementById(addressType).value = val;
			}
		}
	}

	// Bias the autocomplete object to the user's geographical location,
	// as supplied by the browser's 'navigator.geolocation' object.
	function geolocate() {
		if (navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(function(position) {
				var geolocation = {
					lat: position.coords.latitude,
					lng: position.coords.longitude
				};
			// user_latitude =  geolocation.lat;
			// user_longitude =  geolocation.lng;
			// document.getElementById("lat1").value = user_latitude;
			// document.getElementById("lng1").value = user_longitude;

				var circle = new google.maps.Circle({
					center: geolocation,
					radius: position.coords.accuracy
				});
				autocomplete.setBounds(circle.getBounds());
			});
		}
	}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1RaWWrKsEf2xeBjiZ5hk1gannqeFxMmw&libraries=places&callback=initAutocomplete"
		async defer></script>

@endsection
