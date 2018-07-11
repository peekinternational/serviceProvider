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
									</div>
								</div>

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
