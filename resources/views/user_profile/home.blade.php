@extends('layouts.app')

@section('content')

<?php $url = "{{url('show_rating')}}" ?>
<section class="banner-area relative" id="home">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		@include('inc.messages')

		<div class="row fullscreen d-flex align-items-center justify-content-center">
			<div class="banner-content col-lg-12">
				<h1 class="text-white">
					<span>1500+</span> People registered last week


				</h1>

				<form action="{{url('search')}}" method="get" role="search" class="serach-form-area">
					<div class="row justify-content-center form-wrap">
						<div class="col-md-5 form-cols">
							<!-- <input type="text" class="form-control" name="skill" id="skill_val" placeholder="Skills"> -->
							<select class="form-control select2" name="skill" required="" >
								@foreach($navbar_data['skills'] as $skill)
											<option value="{{$skill->skill_name}}">{{$skill->skill_name}}</option>
										@endforeach
							</select>
						</div>
						<div class="col-md-5 form-cols" id="locationField">
							<input id="locality1" name="location" class="form-control"  placeholder="Select your location" type="text" required=""></input>
						</div>
						<input type="hidden" name="city" id="locality">
						<div class="col-md-2 form-cols">
							<button type="submit" class="btn btn-info" id="gskill1">
								<span class="fa fa-search" ></span> Search
							</button>
						</div>
					</div>
				</form>
					<!-- <div id="loaderIcon" class="loaderIcon" style="display: none;"><img src="{{ asset('images/Spinner.gif')}}" alt="">
				</div> -->
				<p class="text-white"> <span>Search by tags:</span> Plumber, Auto Mechanic, Electrician, Welder, Painter, Area, Location</p>
			</div>
		</div>
	</div>
</section>

<section class="service-2 section">
	<div class="container">
		<div id="map">
			<!-- Image Loader -->
			<div id="loaderIcon" class="loaderIcon" style="display: none;"><img src="{{ asset('images/Spinner.gif')}}" alt="">
			</div>
		</div><br>
		<div class="text-center">
			<button type="button" id="area_btn" class="btn btn-success" name="button">Increase Area</button>
		</div>

		<!-- Google Search Display -->
		<div class="container" id="container">
			<div class="row" id="show_all">

			</div>
			<div class="" id="pagination_show">

			</div>

		</div>
		<!-- Google Search Ends -->

	</div>    <!-- End container -->
</section>   <!-- End section -->


<!-- ===================================== Script code here ================================= -->
<script>
function initializeAutocomplete(){
	var input = document.getElementById('locality1');
	// var options = {
	//   types: ['(regions)'],
	//   componentRestrictions: {country: "IN"}
	// };
	var options = {}

	var autocomplete = new google.maps.places.Autocomplete(input,options);

	google.maps.event.addListener(autocomplete, 'place_changed', function() {
		var place = autocomplete.getPlace();
		var lat = place.geometry.location.lat();
		var lng = place.geometry.location.lng();
		// to set city name, using the locality param
		var componentForm = {
			locality1: 'short_name',
			locality: 'long_name'
		};
		for (var i = 0; i < place.address_components.length; i++) {
			var addressType = place.address_components[i].types[0];
			if (componentForm[addressType]) {
				var val = place.address_components[i][componentForm[addressType]];
				document.getElementById(addressType).value = val;
			}
		}
		// document.getElementById("latitude").value = lat;
		// document.getElementById("longitude").value = lng;

	});
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1RaWWrKsEf2xeBjiZ5hk1gannqeFxMmw&libraries=places&callback=initializeAutocomplete"
async="" defer=""></script>


@endsection
