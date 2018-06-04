@extends('layouts.app')

@section('content')

  <!--     Profile view       -->
    <div class="eo-box">
            <div class="eo-timeline">
              <?php if (!empty($user->cover_img)): ?>
                <img src="{{url('img/cover/'.$user->cover_img)}}" class="eo-timeline-cover" alt="{{$user->cover_img}}">
                 <?php else: ?>
                   <img src="{{asset('images/builder.jpg')}}" class="eo-timeline-cover" alt="{{$user->cover_img}}">
                   <?php endif; ?>
                 <!--  Cover image  -->

                <input type="file" id="cover" name="cover_img" class="compnay-cover sp-cover">
                <div class="eo-timeline-toolkit">
                    <label for="cover"><i class="fa fa-camera"></i> &nbsp;Change</label>
                </div>
            </div>
            <div class="col-md-12">
               <div class="row">
                   <div class="col-md-2 eo-dp-box">      <!--  Profile image  -->
                       <?php if (!empty($user->image)): ?>
                         <img src="{{url('img/'.$user->image)}}" class=" eo-dp eo-c-logo " alt="{{$user->image}}">
                         <?php else: ?>
                             <img src="{{asset('img/profile-logo.jpg')}}" class=" eo-dp eo-c-logo " alt="{{$user->image}}">
                       <?php endif; ?>
                       <div class="eo-dp-toolkit">
                           <input type="file" id="eo-dp" name="profile-image" class="compnay-logo pf-image-change">
                           <label for="eo-dp"><i class="fa fa-camera"></i> change</label><br>
                           <label  style="margin-left:-23px" onclick="editcompanypic()"><i class="fa fa-edit"></i>Edit</label><br>
                           <label onclick="removecompanypic()"><i class="fa fa-remove">
                             <input type="hidden" value=""id="userID">
                           </i> Remove</label>
                       </div>

                   </div>

                   <div class="col-md-10 eo-timeline-details">
                       <h1><a href="">{{ $user->name }}</a></h1>
                       <div class="col-md-6 eo-section">
                          <a class="btn btn-primary eo-edit-btn" id="edit_btn" onClick="$('.eo-section').hide(); $('.eo-edit-section').show()"><i class="fa fa-edit"></i> </a>
                           <h4>Basic Information</h4>
                           <div class="eo-details">
                               <span>Skills:</span> {{$user->skill}}
                           </div>
                           <div class="eo-details">
                               <span>Address:</span> {{ $user->address }}, {{$user->city}}, {{$user->country}}
                           </div>
                           <div class="eo-details">
                               <span>Email:</span> {{ $user->email }}
                           </div>
                           <div class="eo-details">
                               <span>Phone:</span> {{ $user->phone }}
                           </div>
                           <div class="eo-details">
                               <span>Experience:</span>{{ $user->experience }}
                           </div>
                           <div class="eo-details">
                              <span>Fee</span> {{$user->fee}}  Rs.
                           </div>
                       </div>
                       <div class="eo-edit-section">

                           <form id="pnj-form" class="form-update" action="{{url('update/'.$user->id)}}" method="post">
                             {{csrf_field()}}
                            <div class="alert alert-success success-group"  style="display:None">

                            </div>
                                <input type="hidden" name="" class="token">
                               <div class="pnj-form-section">
                                 <div class="alert alert-danger error-group" style="display:None">

                                 </div>
                                   <div class="form-group">
                                       <label class="control-label col-sm-3 col-xs-12">Name</label>
                                       <div class="col-sm-9 pnj-form-field">
                                           <input type="text" class="form-control" name="name" id="companyName" placeholder="Name" value="{{ $user->name }}" required>
                                       </div>
                                   </div>
                                     <div class="form-group">
                                       <label class="control-label col-sm-3 col-xs-12">Skills</label>
                                       <div class="col-sm-9 pnj-form-field">
                                           <select class="form-control select2" name="skill">
                                                <option value="Plumber"selected> Plumber</option>
                                                <option value="Electrician" >Electrician</option>
                                                <option value="Welder "> Welder</option>
                                                <option value="Painter" >Painter</option>
                                                <option value="Carpenter"> Carpenter</option>
                                                <option value="Auto-Mechanic" >Auto-Mechanic</option>
                                           </select>
                                       </div>
                                   </div>
                                   <div class="form-group">
                                       <label class="control-label col-sm-3 col-xs-12">phone</label>
                                       <div class="col-sm-9 pnj-form-field">
                                           <input type="text" class="form-control" name="phone" placeholder="Phone" value="{{ $user->phone}}" required>
                                       </div>
                                   </div>
                                   <div class="form-group">
                                       <label class="control-label col-sm-3 col-xs-12">Password</label>
                                       <div class="col-sm-9 pnj-form-field">
                                           <input type="password" class="form-control" name="password" placeholder="Password" value="{{ $user->password }}">
                                       </div>
                                   </div>
                                   <div class="form-group">
                                       <label class="control-label col-sm-3 col-xs-12">Email</label>
                                       <div class="col-sm-9 pnj-form-field">
                                           <input type="email" class="form-control " name="email" placeholder="Email" value="{{ $user->email }}">
                                       </div>
                                   </div>
                                   <div class="form-group">
                                       <label class="control-label col-sm-3 col-xs-12">Location</label>
                                       <div class="col-sm-9 pnj-form-field">
                                         <div id="locationField">
                                           <input id="autocomplete" name="location" class="form-control" value="{{$user->location}}" placeholder="Select your location"
                                                  onFocus="geolocate()" type="text"></input>
                                         </div>
                                           </div>
                                   </div>
                                   <div class="form-group">
                                       <label class="control-label col-sm-3 col-xs-12">address</label>
                                       <div class="col-sm-9 pnj-form-field">
                                           <textarea required class="form-control " placeholder="Address" name="address" style="resize: vertical">{{ $user->address }}</textarea>
                                       </div>
                                   </div>
                                   <div class="form-group">
                                       <label class="control-label col-sm-3 col-xs-12">country</label>
                                       <div class="col-sm-9 pnj-form-field">
                                         <input class="field form-control" name="country" value="{{$user->country}}" id="country"></input>
                                       </div>
                                   </div>
                                   <div class="form-group">
                                       <label class="control-label col-sm-3 col-xs-12">state</label>
                                       <div class="col-sm-9 pnj-form-field">
                                         <input class="field form-control" name="state" value="{{$user->state}}" id="administrative_area_level_1"></input>
                                        </div>
                                   </div>
                                   <div class="form-group">
                                       <label class="control-label col-sm-3 col-xs-12">city</label>
                                       <div class="col-sm-9 pnj-form-field">
                                         <input class="field form-control" name="city" value="{{$user->city}}"  id="locality"></input>
                                        </div>
                                   </div>
              								   <div class="form-group">
                                     <label class="control-label col-sm-3 col-xs-12">Fee</label>
                                     <div class="col-sm-9 pnj-form-field">
                                         <input type="text" class="form-control" name="fee" placeholder="1000" value="{{ $user->fee }}" required>
                                     </div>
                                 </div>
                               </div>
                            <div class="form-group">
                                 <label class="control-label col-sm-3 col-xs-12">Experience</label>
                                 <div class="col-sm-9 pnj-form-field">
                                     <input type="text" class="form-control" name="experience" placeholder="2 Years" value="{{ $user->experience }}" required>
                                 </div>
                             </div>

                                   <div class="col-md-12">
                                       <div class="row">
                                           <div class="col-md-offset-3 col-md-9">
                                             <!-- <input type="button" class="btn btn-primary col-md-3" id="page_submit" name="save" value="Save" style="margin-right:5px"> -->
                                               <button type="submit" class="btn btn-primary col-md-3" id="page_submit" name="save" style="margin-right:5px">SAVE</button>
                                               <button type="button" class="btn btn-default col-md-3" onClick="$('.eo-edit-section').hide(); $('.eo-section').show()">CANCEL</button>
                                           </div>
                                       </div>
                                   </div>
                                   <script>
                                     // This example displays an address form, using the autocomplete feature
                                     // of the Google Places API to help users fill in the information.

                                     // This example requires the Places library. Include the libraries=places
                                     // parameter when you first load the API. For example:
                                     // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

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
                                   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1RaWWrKsEf2xeBjiZ5hk1gannqeFxMmw&libraries=places&callback=initAutocomplete"
                                       async defer></script>



                               </div>
                           </form>
                       </div>
                   </div>
               </div>
            </div>
    <script>
      $(document).ready(function () {
        $("#edit_btn").hide();
      <?php
      $id = session()->get('ses');
      if ($id == $user->id) { ?>
        $("#edit_btn").show();
    <?php  }
       ?>
      });
    </script>

    <script>
$(document).ready(function(){

      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).on('change','#eo-dp',function(e){
var user_id="{{$user->id}}";

     var image = $('.pf-image-change')[0].files[0];

       form = new FormData();
      form.append('profile-image',image);
      form.append('user_id',user_id);

      $.ajax({
        type: 'post',
        data: form,
   cache: false,
   contentType: false,
   processData: false,
        url: "{{ url('imageUpload/'.$user->id) }}",
        success: function(response){
          console.log(response);
          if(response){
            $('.eo-c-logo').attr('src','<?= url('img')?>/'+response);
          }else {
            toastr.error('Following format allowed (PNG/JPG/JPEG)', '', {timeOut: 5000, positionClass: "toast-bottom-center"});
          }

        }
    });
});
});
</script>

<script>
  $(document).ready(function () {
    $.ajaxSetup({
      header: {
        'X-CSRF-TOKEN' : $('meta[name="csrf_token"]').attr('content')
      }
    });
    $(document).on("change", "#cover", function () {

      var id = "{{$user->id}}";
      var image = $('.sp-cover')[0].files[0];

      form = new FormData();
      form.append('cover_image', image);
      form.append('user_id', id);

      $.ajax({
        type: 'post',
        data: form,
        cache: false,
        contentType: false,
        processData: false,
        url: "{{ url('coverUpload/'. $user->id) }}",
        success: function (response) {
          console.log(response);
          // alert(response);
          if(response) {
            $('.eo-timeline-cover').attr('src','<?=url('img/cover')?>/'+response);
          }
        }
      });
    });
  });
</script>



@endsection
