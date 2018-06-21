var map;
var myLatlng;
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
    searchBoys(latval, lngval);
  }

  function fail() {
    alert("It Fails");
  }


  //Create Map
  function createMap(myLatlng) {
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
        });
  }

//Nearby Search
// function nearbySearch(myLatlng, type) {
//
//   var request = {
//   location: myLatlng,
//   radius: '2500',
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

function searchBoys(lat, lng) {
      var mydata={
        latitude:lat,
        longitude:lng
      }
      $.ajaxSetup({
        header: {
          'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
        }
      });

      console.log(mydata);
      $.ajax({
        type: 'post',
        data: mydata,
        url: api_url+"searchBoys",
        success: function (response) {

          $.each(response, function (i, val) {
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

    }
});
