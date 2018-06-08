@extends('layouts.app')

@section('content')

<div class="col-md-8 col-md-offset-2">


<h1 align="center">Create Profile</h1>
<!-- @if(Session ('ses'))
{{Session('ses')}}
@endif -->
<form class="" action="{{url('update/'. $user->id)}}" method="post" enctype="multipart/form-data">

  {{csrf_field()}}
  <div class="" style="text-align: -webkit-center">
      <!-- <i class="fa fa-camera"></i>Change
      <i class="fa fa-pencil"></i>Edit
      <i class="fa fa-remove"></i>Remove -->

  <div class="profile-image text-center">
    <?php if (!empty($user->image)): ?>
      <img src="{{url('img/'.$user->image)}}" class="pf-image" alt="{{$user->image}}">
      <?php else: ?>
          <img src="{{asset('img/profile-logo.jpg')}}" class="pf-image" alt="{{$user->image}}">
    <?php endif; ?>

    </div>

  </div>
  <div class="form-group">
    <label>Full Name:</label>
    <input type="text" name="name" class="form-control" value="{{$user->name}}">
  </div>
  <div class="form-group">
    <label>Phone Number:</label>
    <input type="number" name="phone" class="form-control" value="{{$user->phone}}">
  </div>
  <div class="form-group">
    <label>Password:</label>
    <input type="text" name="password" class="form-control" value="{{$user->password}}">
  </div>
  <div class="form-group">
    <label>Skills:</label>
    <input type="text" name="skill" class="form-control" value="{{$user->skill}}" placeholder="Enter Skills">
  </div>
  <div class="form-group">
    <label>Email:</label>
    <input type="email" name="email" class="form-control" value="{{$user->email}}"  placeholder="Enter Email">
  </div>
  <div class="form-group">
    <label>Location:</label>
    <div id="locationField">
      <input id="autocomplete" name="location" class="form-control" value="{{$user->location}}" placeholder="Select your location"
             onFocus="geolocate()" type="text"></input>
    </div>
  </div>
  <div class="form-group">
    <label>Address:</label>
    <input type="text" name="address" class="form-control"  value="{{$user->address}}"  placeholder="Enter Address">
  </div>
  <div class="form-group">
    <label>City:</label>
    <input class="field form-control" name="city" value="{{$user->city}}"  id="locality"></input>
  </div>
  <div class="form-group">
    <label>State:</label>
    <input class="field form-control" name="state" value="{{$user->state}}" id="administrative_area_level_1"></input>
  </div>
  <div class="form-group">
    <label>Country:</label>
    <input class="field form-control" name="country" value="{{$user->country}}" id="country"></input>
  </div>
  <input type="hidden" name="latitude" id="lat1">
  <input type="hidden" name="longitude" id="lng1">
  <div class="form-group">
    <label>Fee:</label>
    <input type="number" name="fee" class="form-control" value="{{$user->fee}}"  placeholder="Enter Examination Fee">
  </div>
  <div class="form-group">
    <label>Experience:</label>
    <input type="text" name="experience" class="form-control" value="{{$user->experience}}" placeholder="Enter Experience">
  </div>
  <div class="form-group">
    <label>Profile Image:</label>
    <input type="file" class="form-control" value="{{$user->image}}" name="image" id="file" value="">
    </div>


    <script>
      // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:

      var placeSearch, autocomplete;
      var componentForm = {
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name'
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
          user_latitude =  geolocation.lat;
          user_longitude =  geolocation.lng;
          document.getElementById("lat1").value = user_latitude;
          document.getElementById("lng1").value = user_longitude;

            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    </script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1RaWWrKsEf2xeBjiZ5hk1gannqeFxMmw&libraries=places&callback=initAutocomplete"
        async defer></script> -->

  <button type="submit" class="btn btn-primary" name="button">Submit</button>
</form>
</div>
@endsection
