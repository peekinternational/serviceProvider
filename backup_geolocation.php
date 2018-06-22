<script>

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
                                  console.log(place);

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
                                    console.log(user_latitude, user_longitude);
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
                                // var searchBox = new google.maps.places.SearchBox(document.getElementById('locationField'));4
                                // google.maps.event.addListener(searchBox, 'place_changed', function () {
                                //   var places = searchBox.getPlace();
                                //   var bounds
                                // });
                              </script>
                              <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1RaWWrKsEf2xeBjiZ5hk1gannqeFxMmw&libraries=places&callback=initAutocomplete"
                                  async defer></script>











        <form id="pnj-form" class="form-update" action="{{url('update/'.$user->id)}}" method="post">   <!-- Update Form start -->
          {{csrf_field()}}
             <input type="hidden" name="" class="token">
            <div class="pnj-form-section">
                <div class="form-group">
                    <label class="control-label col-sm-3 col-xs-12">Name</label>
                    <div class="col-sm-9 pnj-form-field">
                        <input type="text" class="form-control" name="name" id="companyName" placeholder="Name" value="{{ $user->name }}" required>
                    </div>
                </div>
                  <div class="form-group">     <!-- Skill slection -->
                    <label class="control-label col-sm-3 col-xs-12">Skills</label>
                    <div class="col-sm-9 pnj-form-field">
                        <select class="form-control select2" name="skill">
                             <option value="Plumber"selected> Plumber</option>
                             <option value="Electrician" >Electrician</option>
                             <option value="Welder "> Welder</option>
                             <option value="Painter" >Painter</option>
                             <option value="Carpenter"> Carpenter</option>
                             <option value="Auto-Mechanic" >Auto-Mechanic</option>
                             <option value="Cook" >cook</option>
                             <option value="Gardener"> Gardener</option>
                             <option value="Sweeper" >Sweeper</option>
                        </select>
                    </div>
                </div>   <!-- Skill slection end -->
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
                <input type="hidden" name="latitude" id="lat1">
                <input type="hidden" name="longitude" id="lng1">
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
      <div class="form-group">
      <label class="control-label col-sm-3 col-xs-12">Experience</label>
      <div class="col-sm-9 pnj-form-field">
      <input type="text" class="form-control" name="experience" placeholder="2 Years" value="{{ $user->experience }}" required>
      </div>
      </div>

                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-9">    <!-- Form Buttons here -->
                            <button type="submit" class="btn btn-primary col-md-3" id="page_submit" name="save" style="margin-right:5px">SAVE</button>
                            <button type="button" class="btn btn-default col-md-3" onClick="$('.eo-edit-section').hide(); $('.eo-section').show()">CANCEL</button>
                        </div>
                    </div>
                </div>
      </div>  <!-- pnj-form-section ends -->
        </form>
