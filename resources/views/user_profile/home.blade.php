@extends('layouts.app')

@section('content')
<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					@include('inc.messages')

					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-12">
							<h1 class="text-white">
								<span>1500+</span> People registered last week
							</h1>

					<!-- <form class="form-group" role="search" action="{{url('search')}}" method="get">
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
					</form> -->
					<!-- <form action="{{url('search')}}" method="get" role="search" class="serach-form-area"> -->
								<div class="row justify-content-center form-wrap">
									<div class="col-md-5 form-cols">
										<input type="text" class="form-control" name="skill" id="skill_val" placeholder="Skills">
									</div>
									<div class="col-md-5 form-cols" id="locationField">
										<input id="autocomplete" name="location" class="form-control"  placeholder="Select your location" onFocus="geolocate()" type="text"></input>
									</div>
									<div class="col-md-2 form-cols">
									    <button type="submit" class="btn btn-info" id="gskill">
									      <span class="fa fa-search" ></span> Search
									    </button>
											<!-- <button class="btn btn-default" type="submit"> Search &nbsp; &nbsp;<i class="fa fa-search fa-lg "></i></button> -->
									</div>
								</div>
							<!-- </form> -->

				<p class="text-white"> <span>Search by tags:</span> Plumber, Auto Mechanic, Electrician, Welder, Painter, Area, Location</p>
			</div>
				</div>
			</div>
		</section>
<section class="service-2 section">
  <div class="container">
		<div id="map">

  </div><br>
	<div class="text-center">
		<button type="button" id="area_btn" class="btn btn-success" name="button">Increase Area</button>
	</div>

	<!-- Google Search Display -->
	<div class="container" id="container">
	    <div class="row" id="show_all">

	    </div>

	</div>
	<!-- Google Search Ends -->
    <div class="row">
      <!-- Content Section -->
      <div class="title text-center"  >
        <h2>What Do We Offer</h2>
        <p>Plumber, Auto Mechanic, Electrician, Welder, Painter, Cook, Gardener, Sweeper </p>
        <div class="border"></div>
      </div>
      <!--  Services Section  -->
      <div class="col-md-10 col-md-offset-1">
        <div class="row text-center">
          <div class="col-md-4 col-sm-4 col-xs-12">
			<a href="{{url('skill_search/')}}?skill=plumber">
            <div class="service-item">
            	<div class="text-center">
             	 <img src="{{asset('images/plumber.jpg')}}" class=" img-circle skill_logo">
                </div>
              <h4>Plumber</h4>
              <p><b>Looking for a Plumber?</b> We offer a premium plumbing service in Islamabad. No job is too small or big for us. Our Plumbers are skilled, trained and professional, and can do any kind of plumbing job for you.</p>
            </div>
					</a>
          </div><!-- END COL -->
					<div class="col-md-4 col-sm-4 col-xs-12">
          <a href="{{url('skill_search/')}}?skill=electrician"> <div class="service-item">
             <div class="text-center">
             	 <img src="{{asset('images/elec.png')}}" class=" img-circle skill_logo">
                </div>
              <h4>Electrician</h4>
              <p><b>Electricians install </b> and maintain all of the electrical and power systems for our homes, businesses, and factories. They install and maintain the wiring and control equipment through which electricity flows. </p>
            </div>
						</a>
          </div><!-- END COL -->
					<div class="col-md-4 col-sm-4 col-xs-12">
						<a href="{{url('skill_search/')}}?skill=carpenter">
            <div class="service-item">
              <div class="text-center">
             	 <img src="{{asset('images/carpentry-2.jpg')}}" class=" img-circle skill_logo">
                </div>
              <h4>Carpenter</h4>
              <p>Carpenter. Carpenters construct and repair building frameworks and structures—such as stairways, doorframes, partitions, and rafters—made from wood and other materials. They also may install kitchen cabinets, siding, and drywall.</p>
            </div>
					</a>
          </div><!-- END COL -->
          <div class="col-md-4 col-sm-4 col-xs-12">
						<a href="{{url('skill_search/')}}?skill=mechanic">
            <div class="service-item">
             <div class="text-center">
             	 <img src="{{asset('images/aut.png')}}" class=" img-circle skill_logo">
                </div>
              <h4>Auto Mechanic</h4>
              <p>An auto mechanic performs maintenance, diagnostic testing, repairs, and inspections of small trucks and cars. They work on engines, drive belts, transmissions, and electronic systems such as steering, brakes, and accident-avoidance systems.</p>
            </div>
					</a>
          </div><!-- END COL -->
          <div class="col-md-4 col-sm-4 col-xs-12">
			<a href="{{url('skill_search/')}}?skill=painter">
            <div class="service-item">
				<div class="text-center">
             	 <img src="{{asset('images/painter.jpg')}}" class=" img-circle skill_logo">
                </div>
              <h4>Painter</h4>
              <p>Wall Painter Service in your city. Service Provider can provide work related to the painting of homes and offices. We can paint and polish walls, partitions, etc.</p>
            </div>
					</a>
          </div><!-- END COL -->
          <div class="col-md-4 col-sm-4 col-xs-12">
			<a href="{{url('skill_search/')}}?skill=welder">
            <div class="service-item">
				<div class="text-center">
             	 <img src="{{asset('images/welder.jpg')}}" class=" img-circle skill_logo">
                </div>
              <h4>Welder</h4>
              <p>Welders primary duty is joining metal parts together. They work on metal components of a various of building or construction industries. Examples include but are not limited to pipelines, bridges, power-plants, or refineries.</p>
            </div>
					</a>
          </div><!-- END COL -->
	        <div class="col-md-4 col-sm-4 col-xs-12">
				<a href="{{url('skill_search/')}}?skill=cook">
            <div class="service-item">
             <div class="text-center">
             	 <img src="{{asset('images/chef.jpg')}}" class=" img-circle skill_logo">
                </div>
              <h4>Cook</h4>
              <p>An auto mechanic performs maintenance, diagnostic testing, repairs, and inspections of small trucks and cars. They work on engines, drive belts, transmissions, and electronic systems such as steering, brakes, and accident-avoidance systems.</p>
            </div>
					</a>
          </div><!-- END COL -->
          <div class="col-md-4 col-sm-4 col-xs-12">

			<a href="{{url('skill_search/')}}?skill=gardener">

            <div class="service-item">
				<div class="text-center">
             	 <img src="{{asset('images/garden.png')}}" class=" img-circle skill_logo">
                </div>
              <h4>Gardener</h4>
              <p>Wall Painter Service in your city. Service Provider can provide work related to the painting of homes and offices. We can paint and polish walls, partitions, etc.</p>
            </div>
					</a>
          </div><!-- END COL -->
          <div class="col-md-4 col-sm-4 col-xs-12">

			<a href="{{url('skill_search/')}}?skill=sweeper">

            <div class="service-item">
				<div class="text-center">
             	 <img src="{{asset('images/sweeper.png')}}" class=" img-circle skill_logo">
                </div>
              <h4>Sweeper</h4>
              <p>Welders primary duty is joining metal parts together. They work on metal components of a various of building or construction industries. Examples include but are not limited to pipelines, bridges, power-plants, or refineries.</p>
            </div>
					</a>
          </div><!-- END COL -->
        </div>
      </div> <!-- End Services Section  -->
    </div>    <!-- End row -->
  </div>    <!-- End container -->
</section>   <!-- End section -->


     <!-- ===================================== Script code here ================================= -->
<script>
	// This example displays an address form, using the autocomplete feature
	// of the Google Places API to help users fill in the information.

	// This example requires the Places library. Include the libraries=places
	// parameter when you first load the API. For example:


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

				// var circle = new google.maps.Circle({
				// 	center: geolocation,
				// 	radius: position.coords.accuracy
				// });
				// autocomplete.setBounds(circle.getBounds());
			});
		}
	}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1RaWWrKsEf2xeBjiZ5hk1gannqeFxMmw&libraries=places&callback=initAutocomplete"
		async="" defer=""></script>


@endsection
