var map;
var myLatlng;
var radius;
// var km =  0.00900900;
var km =  0.04504504;
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
      zoom: 12
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
      // ajax_kilometer();
      // function ajax_kilometer() {


      $.ajax({
          // [lbl] start:
        type: 'post',
        data: mydata,
        url: api_url+"searchBoys",
        success: function (response) {
          var res = JSON.parse(response);
          console.log(res);
          km = res.km;
        radius = km*111*1000;
          console.log(radius);

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
          // console.log([glatval, glngval]);
          var  GLatlng = new google.maps.LatLng(glatval, glngval);
          var  gicn = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';
            createMarker(GLatlng, gicn, gname);

          });
        }
      });
      // }
    }
});
