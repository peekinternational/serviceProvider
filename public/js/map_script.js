var map;
var myLatlng;
var radius;
var killometer=1;
var km = (1/111)*killometer;
var api_url='http://127.0.0.1:8000/api/'
// var api_url='http://203.99.61.173/demos/service_provider/public/api/'
$(document).ready(function () {
  geoLocationInit();
  function geoLocationInit() {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(success, fail);
    }else {
      alert("Browser not supported");
    }
  }

  function success(position) {
    console.log(position);
    var latval = position.coords.latitude;
    var lngval = position.coords.longitude;

     myLatlng = new google.maps.LatLng(latval, lngval);
    createMap(myLatlng);
    // nearbySearch(myLatlng, "school");
    searchBoys(latval, lngval, km);
  }

  function fail() {
    alert("It Fails");
  }


  //Create Map
  function createMap(myLatlng, radius) {
     map = new google.maps.Map(document.getElementById('map'), {
      center: myLatlng,
      zoom:12
      
    });

    var marker = new google.maps.Marker({
          position: myLatlng,
          map: map
    });


  }

  //Create Marker
  function createMarker(latlng, icn, name) {
    var marker = new google.maps.Marker({
            position: latlng,
            map: map,
            icon: icn,
            title:name
            // draggable: true
        });
  }

// Nearby Search
// function nearbySearch(myLatlng, type) {

//   var request = {
//   location: myLatlng,
//   radius: '2500',
//   type: [type]
//   };


//   service = new google.maps.places.PlacesService(map);
//   service.nearbySearch(request, callback);

//   function callback(results, status) {
//     // console.log(results);
//   if (status == google.maps.places.PlacesServiceStatus.OK) {
//     for (var i = 0; i < results.length; i++) {
//       var place = results[i];
//       latlng = place.geometry.location;
//       icn = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';
//       name = place.name;
//       createMarker(latlng, icn, name);
//     }
//   }
// }
// }
//Nearby Search
// function nearbySearch(myLatlng, type) {
//
//   var request = {
//   location: myLatlng,
//   radius: '1000',
//   type: [type]
//   };
//
//
//   service = new google.maps.places.PlacesService(map);
//   service.nearbySearch(request, callback);
//
//   function callback(results, status) {
//     // console.log(results);
//   if (status == google.maps.places.PlacesServiceStatus.OK) {
//     for (var i = 0; i < results.length; i++) {
//       var place = results[i];
//       latlng = place.geometry.location;
//       icn = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';
//       name = place.name;
//       createMarker(latlng, icn, name);
//     }
//   }
// }
// }


function searchBoys(lat, lng, km) {
      var mydata={
        latitude:lat,
        longitude:lng,
        km: km
      }
      $.ajaxSetup({
        header: {
          'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
        }
      });

      console.log(mydata);

      $.ajax({
          // [lbl] start:
        type: 'post',
        data: mydata,
        url: api_url+"searchBoys",
        success: function (response) {
          var res = JSON.parse(response);
          // console.log(res);
          km = res.km;
        radius = km*111*1000;
          console.log(res.order);
                                                 // Circle at Map
          var circle = new google.maps.Circle({
            map: map,
            center: myLatlng,
            radius: radius
          });
          $.each(res.provider, function (i, val) {
            console.log(val.name);
          var  glatval=val.latitude;
          var  glngval=val.longitude;
          var  gname=val.name;
          var temp = '';
          for (var i = 0; i <res.order.length; i++) {
            var profile_img = '';
            if (res.order[i].image == null) {
            profile_img = '<img src="img/profile-logo.jpg" class="pf-image" alt="">'
            }
            else {
            profile_img = '<img src="img/'+ res.order[i].image+'" class="pf-image" alt="">'
            }
            temp +='<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">'+
            '<div class="well well-sm">'+
              '<div class="row">'+
                     '<div class="col-sm-12 text-center">'+
                    '<div class="profile-show">'+
                    profile_img+
                    '</div>'+
                    '</div>'+
                  '<div class="col-sm-12 col-md-8">&nbsp;'+
                  '<h4><a href="profile_view/'+res.order[i].id+ '">'+  res.order[i].name+ '</a></h4>'+
                      <!-- Split button -->
                      '<div class="row">'+
                        '<div class="col-md-12 col-sm-12 col-xm-12">'+
                         '<i class="fa fa-wrench"></i>&nbsp; &nbsp;'+
                          res.order[i].skill+

                       '</div>'+
                      '</div>'+

                      '<div class="row">'+
                       '<div class="col-md-12 col-sm-12 col-xm-12">'+
                        '<i class="fa fa-map-marker"></i>&nbsp;  &nbsp; '+
                                 res.order[i].location+
                                '</div>'+
                              '</div>'+
                            '</div>'+
                        '</div>'+
                    '</div>'+
                '</div>';
          }
          document.getElementById('show_all').innerHTML = temp;
          // console.log([glatval, glngval, gname]); 
         // console.log(mydata.latitude);  //current latitued
          var  GLatlng = new google.maps.LatLng(glatval, glngval);
          var  gicn = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';
            createMarker(GLatlng, gicn, gname);

          });
        }
      });
    }
});
