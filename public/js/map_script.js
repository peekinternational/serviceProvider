// var map;
// var myLatlng;
// var radius;
// var lngval;
// var latval;
// var kilometer = 3;
// var km =  (1/111)*kilometer;
// // var km =  0.04504504;
// var api_url='http://127.0.0.1:8000/api/'
// // var api_url='http://203.99.61.173/demos/service_provider/public/api/'
// $(document).ready(function () {
//   function map(name) {
//
//   }
//   geoLocationInit();
//   function geoLocationInit() {
//     if (navigator.geolocation) {
//       navigator.geolocation.getCurrentPosition(success, fail);
//     }else {
//       alert("Browser not supported");
//     }
//   }
//
//   function success(position) {
//     // console.log(position);
//      latval = position.coords.latitude;
//      lngval = position.coords.longitude;
//
//      myLatlng = new google.maps.LatLng(latval, lngval);
//     createMap(myLatlng);
//     // nearbySearch(myLatlng, "school");
//
//     searchBoys(latval, lngval, km);
//   }
//
//   function fail() {
//     alert("It Fails");
//   }
//
//
//   //Create Map
//   function createMap(myLatlng, radius) {
//      map = new google.maps.Map(document.getElementById('map'), {
//       center: myLatlng,
//       zoom: 11
//     });
//
//     var marker = new google.maps.Marker({
//           position: myLatlng,
//           map: map
//     });
//
//
//   }
//
//   //Create Marker
//   function createMarker(latlng, icn, name) {
//     var marker = new google.maps.Marker({
//             position: latlng,
//             map: map,
//             icon: icn,
//             title:name
//             // draggable: true
//
//         });
//   }
//
// //Nearby Search
// // function nearbySearch(myLatlng, type) {
// //
// //   var request = {
// //   location: myLatlng,
// //   radius: '1000',
// //   type: [type]
// //   };
// //
// //
// //   service = new google.maps.places.PlacesService(map);
// //   service.nearbySearch(request, callback);
// //
// //   function callback(results, status) {
// //     // console.log(results);
// //   if (status == google.maps.places.PlacesServiceStatus.OK) {
// //     for (var i = 0; i < results.length; i++) {
// //       var place = results[i];
// //       latlng = place.geometry.location;
// //       icn = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';
// //       name = place.name;
// //       createMarker(latlng, icn, name);
// //     }
// //   }
// // }
// // }
//
// function searchBoys(lat, lng, km) {
//       var mydata={
//         latitude:lat,
//         longitude:lng,
//         km: km
//
//       }
//
//       $.ajaxSetup({
//         header: {
//           'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
//         }
//       });
//
//       // console.log(mydata);
//
//       $.ajax({
//         type: 'post',
//         data: mydata,
//         url: api_url+"searchBoys",
//         success: function (response) {
//           var res = JSON.parse(response);
//           // console.log(res);
//           km = res.km;
//         radius = km*111*1000;
//           console.log(radius);
//
//           var circle = new google.maps.Circle({
//             map: map,
//             center: myLatlng,
//             radius: radius
//           });
//           $.each(res.provider, function (i, val) {
//             console.log(val.name);
//           var  glatval=val.latitude;
//           var  glngval=val.longitude;
//           var  gname=val.name;
//           var temp = '';
//           for (var i = 0; i <res.provider.length; i++) {
//             var profile_img = '';
//             if (res.provider[i].image == null) {
//             profile_img = '<img src="img/profile-logo.jpg" class="pf-image" alt="">'
//             }
//             else {
//             profile_img = '<img src="img/'+ res.provider[i].image+'" class="pf-image" alt="">'
//             }
//             temp +='<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">'+
//             '<div class="well well-sm">'+
//               '<div class="row">'+
//                      '<div class="col-sm-12 text-center">'+
//                     '<div class="profile-show">'+
//                     '<a href="profile_view/'+res.provider[i].id+ '">'+ profile_img+ '</a>'+
//                     '</div>'+
//                     '</div>'+
//                   '<div class="col-sm-12 col-md-8">&nbsp;'+
//                   '<h4><a href="profile_view/'+res.provider[i].id+ '">'+  res.provider[i].name+ '</a></h4>'+
//                       <!-- Split button -->
//                       '<div class="row">'+
//                         '<div class="col-md-12 col-sm-12 col-xm-12">'+
//                          '<i class="fa fa-wrench"></i>&nbsp; &nbsp;'+
//                     			res.provider[i].skill+
//
//                        '</div>'+
//                       '</div>'+
//
//                       '<div class="row">'+
//                        '<div class="col-md-12 col-sm-12 col-xm-12">'+
//                         '<i class="fa fa-map-marker"></i>&nbsp;  &nbsp; '+
//       	                         res.provider[i].location+
//       	                        '</div>'+
//       	                      '</div>'+
//       	                    '</div>'+
//       	                '</div>'+
//       	            '</div>'+
//       	        '</div>';
//           }
//           document.getElementById('show_all').innerHTML = temp;
//           var  GLatlng = new google.maps.LatLng(glatval, glngval);
//           var  gicn = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';
//             createMarker(GLatlng, gicn, gname);
//
//           });
//         }
//       });
//     }
// });









var map;
var myLatlng;
var radius;
var lngval;
var latval;
var kilometer = 20;
var km =  (1/111)*kilometer;
var autozoom;
// var km =  0.04504504;
var api_url='http://127.0.0.1:8000/api/'
// var api_url='http://203.99.61.173/demos/service_provider/public/api/'
$("#gskill").click(function () {
var skill = $("#skill_val").val();
skills(skill);
});
var rec_skill =$("input[name='skill_send']").val();
// alert(rec_skill);
skills(rec_skill);

  // $('.nav_skill').on('click',function(e){
  //   var skill = $(e.target).data('skill');
  //   skills(skill);
  // });
  function skills(get_skill) {

  // alert(get_skill);
  geoLocationInit();
  function geoLocationInit() {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(success, fail);
    }else {
      alert("Browser not supported");
    }
  }

  function success(position) {
    // console.log(position);
     latval = position.coords.latitude;
     lngval = position.coords.longitude;

     myLatlng = new google.maps.LatLng(latval, lngval);

    // createMap(myLatlng,autozoom);
    // nearbySearch(myLatlng, "school");
    // alert(get_skill);
    searchBoys(latval, lngval, km, get_skill);
  }

  function fail() {
    alert("It Fails");
  }
  //Create Map
  function createMap(myLatlng, autozoom) {
     map = new google.maps.Map(document.getElementById('map'), {
      center: myLatlng,
      zoom:autozoom

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

function searchBoys(lat, lng, km, get_skill) {
  // alert(get_skill);
      var mydata={
        latitude:lat,
        longitude:lng,
        km: km,
        skill: get_skill

      }


      $.ajaxSetup({
        header: {
          'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
        }
      });

      // console.log(mydata);

      $.ajax({
        type: 'post',
        data: mydata,
        url: api_url+"searchBoys",
        success: function (response) {
          var res = JSON.parse(response);
          // console.log(res);
          km = res.km;
        radius = km*111*1000;
         var kilom=res.km*111;
            console.log(kilom);
        if(kilom <=10){
          autozoom=12;
        }
        else if (kilom <=30)
        {
          autozoom=11;
        } else if(kilom <=60)
        {
           autozoom=10;
        }
          else if(kilom <=100)
          { autozoom=8;
          }
          else if(kilom >200){
            autozoom=7;
          }

          console.log(autozoom);
          createMap(myLatlng,autozoom);
                                                 // Circle at Map
          var circle = new google.maps.Circle({
            map: map,
            center: myLatlng,
            radius: radius
          });
          $.each(res.provider, function (i, val) {
            // console.log(val.name);
            console.log(res.provider);
          var  glatval=val.latitude;
          var  glngval=val.longitude;
          var  gname=val.name;

          var temp = '';
          for (var i = 0; i <res.provider.length; i++) {
            var profile_img = '';
            if (res.provider[i].image == null) {
            profile_img = '<img src="http://localhost:8000/img/profile-logo.jpg" class="pf-image" alt="">'
            // alert(profile_img);
            }
            else {

            profile_img = '<img src="http://localhost:8000/img/'+res.provider[i].image+'" class="pf-image" alt="">'
            // console.log(profile_img);
            }
            temp +='<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">'+
            '<div class="well well-sm">'+
              '<div class="row">'+
                     '<div class="col-sm-12 text-center">'+
                    '<div class="profile-show">'+
                    '<a href="profile_view/'+res.provider[i].id+ '">'+ profile_img+ '</a>'+
                    '</div>'+
                    '</div>'+
                  '<div class="col-sm-12 col-md-8">&nbsp;'+
                  '<h4><a href="profile_view/'+res.provider[i].id+ '">'+  res.provider[i].name+ '</a></h4>'+
                      <!-- Split button -->
                      '<div class="row">'+
                        '<div class="col-md-12 col-sm-12 col-xm-12">'+
                         '<i class="fa fa-wrench"></i>&nbsp; &nbsp;'+
                    			res.provider[i].skill+

                       '</div>'+
                      '</div>'+

                      '<div class="row">'+
                       '<div class="col-md-12 col-sm-12 col-xm-12">'+
                        '<i class="fa fa-map-marker"></i>&nbsp;  &nbsp; '+
      	                         res.provider[i].location+
      	                        '</div>'+
      	                      '</div>'+
      	                    '</div>'+
      	                '</div>'+
      	            '</div>'+
      	        '</div>';
          }
          document.getElementById('show_all').innerHTML = temp;
          var  GLatlng = new google.maps.LatLng(glatval, glngval);
          var  gicn = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';
            // alert(GLatlng);
            createMarker(GLatlng, gicn, gname);

          });
        }
      });
    }
}
