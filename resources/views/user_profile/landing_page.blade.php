@extends('layouts.app')

@section('content')
<!DOCTYPE html>
  <!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="author" content="" />
		<meta name="description" content="" />
    <title>Free Education Template</title>

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />

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
                <input type="text" class="form-control" name="skill" id="skill_val" placeholder="Skills">
              </div>
              <div class="col-md-5 form-cols" id="locationField">
                <input id="locality1" name="location" class="form-control"  placeholder="Select your location" type="text"></input>
              </div>
              <input type="hidden" name="city" id="locality">
              <div class="col-md-2 form-cols">
                <button type="submit" class="btn btn-info" id="gskill1">
                  <span class="fa fa-search" ></span> Search
                </button>
              </div>
            </div>
            <!-- <div id="loaderIcon" class="loaderIcon" style="display: none;"><img src="{{ asset('images/Spinner.gif')}}" alt="">
          </div> -->
          <p class="text-white"> <span>Search by tags:</span> Plumber, Auto Mechanic, Electrician, Welder, Painter, Area, Location</p>
        </div>
      </div>
    </div>
  </section>
  <!--HOME SECTION END-->
  <div  class="tag-line" >
    <div class="container">
      <div class="row  text-center" >

        <div class="col-lg-12  col-md-12 col-sm-12">

          <h2 data-scroll-reveal="enter from the bottom after 0.1s" ><i class="fa fa-circle-o-notch"></i> WELCOME TO THE SERVICE PROVIDER <i class="fa fa-circle-o-notch"></i> </h2>
        </div>
      </div>
    </div>

  </div>
  <!--HOME SECTION TAG LINE END-->
  <div id="features-sec" class="container set-pad" >
    <div class="row text-center">
      <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
        <h1 data-scroll-reveal="enter from the bottom after 0.2s"  class="header-line">Feature List </h1>
        <!-- <p data-scroll-reveal="enter from the bottom after 0.3s" >
          In this application we offter you a lot of facilities you can
          search you required service provider by using this application.
          This application is easy to use and get contact with any service provider you need.
        </p> -->
        <p data-scroll-reveal="enter from the bottom after 0.3s">Choose services from various service providers all over World, engage in discussion before hiring a service provider.
          No need to pay money in advance release your money only once you are satisfied with the final work delivered. Everyone's Interest is 100% protected</p>
      </div>

    </div><br><br>
    <!--/.HEADER LINE END-->


    <div class="row" >
      <!-- OWL CAROUSEL -->
      <div class="col-md-4 col-xs-12" data-scroll-reveal="enter from the bottom after 0.5s">
        <div class="owl-carousel">
          <div class="item">
            <div class="thumbnail"> <img alt="" class="img-responsive" src="{{asset('screen_shots/1.jpg')}}" /> </div>
          </div>
          <div class="item">
            <img alt="" class="img-responsive" src="{{asset('screen_shots/2.jpg')}}" />
          </div>
          <div class="item">
            <img alt="" class="img-responsive" src="{{asset('screen_shots/3.jpg')}}" />
          </div>
          <div class="item">
            <img alt="" class="img-responsive" src="{{asset('screen_shots/4.jpg')}}" />
          </div>
          <div class="item">
            <img alt="" class="img-responsive" src="{{asset('screen_shots/5.jpg')}}" />
          </div>
          
        </div>
        <div class="owl-dots" style=""><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div></div>
      </div>
      <div class="col-md-6 col-md-offset-2 col-xs-12" style="font-size: 17px;" data-scroll-reveal="enter from the bottom after 0.7s">
        <h2 style="color: black;">What are your benefits?</h2>
        <ul>
          <li>
            <i class="fa  fa-chevron-right text-primary">&nbsp;</i>
            <span>Browse Services of various Service Providers</span>
          </li><br>
          <li>
            <i class="fa  fa-chevron-right text-primary">&nbsp;</i>
            <span>Search location of Service Providers near you</span>
          </li><br>
          <li>
            <i class="fa  fa-chevron-right text-primary">&nbsp;</i>
            <span>You can get work easily</span>
          </li><br>
          <li>
            <i class="fa  fa-chevron-right text-primary">&nbsp;</i>
            <span>A good reviewed profile excite chance of more work</span>
          </li><br>

        </ul>
      </div>


      <!-- <div class="col-lg-12  col-md-12 col-sm-12" data-scroll-reveal="enter from the bottom after 0.4s">
        <h1 align="center" style="color: black;">About US</h1>
        <p>In this application you can register yourself if you want to be a Service Provider here.
          Then you have login by providing essential details for login process and after login you go the profile to edit your profile. In Edit profile you can select your
          skill in which you are expert. You will write your Address & Phone number. You can add your
          experience and you examination fee. You can also add your profile and cover picture in this application. </p> <br>
          <p>If you don't want to register you self you just need to contact the service provider then simply
            download the application and when you run this application you will see the registered serive Provider
            near you area you can simply contact them by using this application. We are using google map in this application
            when you open the application it will get your current location and show marker on the google map.
            Like if you are sitting in your home and you got problem in electircity wiring you can simply
            open the application and see which electrician is near you and you can contact him through this application.</p>
          </div> -->
        </div>
      </div>


      <div id="course-sec" class="container-fluid set-pad our-courses">
        <div class="row text-center">
          <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
            <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">OUR SERVICES </h1>
            <p data-scroll-reveal="enter from the bottom after 0.3s">
              We offer you Plumber, Electircian, Carpenter, Painter, Auto-Mechanic, Gardener,
              Cook, Sweeper, Welder.
            </p>
          </div>

        </div>
        <!--/.HEADER LINE END-->


        <div class="row set-row-pad" >
          <div class="col-lg-6 col-md-6 col-sm-6 " data-scroll-reveal="enter from the bottom after 0.4s" >
            <img src="{{asset('images/service-provider.jpg')}}" class="img-thumbnail" />
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
            <div class="panel-group" id="accordion">
              <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.5s">
                <div class="panel-heading" >
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="collapsed">
                      <strong>   350+</strong> Electrician
                    </a>
                  </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse" style="height: 0px;">
                  <div class="panel-body">
                    <p>An electrician is a tradesman specializing in electrical wiring of buildings, stationary machines, and related equipment. Electricians may
                      be employed in the installation of new electrical components or the maintenance and repair of existing electrical infrastructure.</p>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.7s">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="collapsed">
                        <strong>   250+</strong> Plumbers
                      </a>
                    </h4>
                  </div>
                  <div id="collapse2" class="panel-collapse collapse" style="height: 0px;">
                    <div class="panel-body">
                      <p>
                        A plumber is a tradesperson who specializes in installing and maintaining systems used for potable (drinking) water, sewage and drainage in plumbing systems.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.9s">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="collapsed">
                        <strong>   153+</strong> Mechanics
                      </a>
                    </h4>
                  </div>
                  <div id="collapse3" class="panel-collapse collapse"  style="height: 0px;">
                    <div class="panel-body">
                      <p>
                        In repairing cars, their main role is to diagnose the problem accurately and quickly. They often have to quote prices for their customers before
                        commencing work or after partial disassembly for inspection. Their job may involve the repair of a specific part or the replacement of one or more parts as assemblies.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="alert alert-info" data-scroll-reveal="enter from the bottom after 1.1s" >
                <span style="font-size:40px;">
                  <strong> 2500 + </strong>
                  <hr />
                  Service Providers
                </span>
              </div>
            </div>

            <div class="col-lg-12  col-md-12 col-sm-12" data-scroll-reveal="enter from the bottom after 0.4s">
              <h1 align="center" style="color: black;">About US</h1>
              <p>In this application you can register yourself if you want to be a Service Provider here.
                Then you have login by providing essential details for login process and after login you go the profile to edit your profile. In Edit profile you can select your
                skill in which you are expert. You will write your Address & Phone number. You can add your
                experience and you examination fee. You can also add your profile and cover picture in this application. </p> <br>
                <p>If you don't want to register you self you just need to contact the service provider then simply
                  download the application and when you run this application you will see the registered serive Provider
                  near you area you can simply contact them by using this application. We are using google map in this application
                  when you open the application it will get your current location and show marker on the google map.
                  Like if you are sitting in your home and you got problem in electircity wiring you can simply
                  open the application and see which electrician is near you and you can contact him through this application.</p>
                </div>



                      </div>
                    </div>
                    <!-- COURSES SECTION END-->
                    <div id="contact-sec">
                      <div class="overlay-contact" style="">
                        <div class="container set-pad">
                          <div class="row text-center">
                            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                              <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line" >CONTACT US  </h1>
                              <p data-scroll-reveal="enter from the bottom after 0.3s">
                                If you have any questions or queries you can contact us through the form.
                              </p>
                            </div>

                          </div>

                          <div class="row set-row-pad"  data-scroll-reveal="enter from the bottom after 0.5s" >


                            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                              <form action="" method="">

                                <div class="form-group">
                                  <input type="text" class="form-control" onkeyup="check()" id="name"  name="name"   placeholder="Your Name" />
                                </div>
                                <div class="form-group">
                                  <input type="email" class="form-control" onkeyup="check()" id="email"  name="email"   placeholder="Your Email" />
                                </div>
                                <div class="form-group">
                                  <textarea name="message" id="message" onkeyup="check()"  class="form-control"  style="min-height: 150px;" placeholder="Message"></textarea>
                                </div>
                                <div class="form-group">
                                  <button type="button" id="contact_btn" disabled class="btn btn-info btn-block btn-lg">SUBMIT REQUEST</button>
                                </div>

                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="container">
                      <div class="row set-row-pad">
                        <div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1 " data-scroll-reveal="enter from the bottom after 0.4s">

                          <h2 ><strong>Our Location </strong></h2>
                          <hr />
                          <div>
                            <h4>Office 4B, First Floor, United Plaza</h4>
                            <h4>Shamsabad, Rawalpindi.</h4>
                            <h4><strong>Call:</strong>  + 67-098-907-1269 / 70 / 71 </h4>
                            <h4><strong>Email: </strong>info@yourdomain.com</h4>
                          </div>


                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1" data-scroll-reveal="enter from the bottom after 0.4s">

                          <h2 ><strong>Social Conectivity </strong></h2>
                          <hr />
                          <div >
                            <a href="https://www.facebook.com/peekinternational50.com.pk/">  <img src="{{asset('img2/Social/facebook.png')}}" alt="" /> </a>
                            <a href="#"> <img src="{{asset('img2/Social/google-plus.png')}}" alt="" /></a>
                            <a href="#"> <img src="{{asset('img2/Social/twitter.png')}}" alt="" /></a>
                          </div>
                        </div>


                      </div>
                    </div>
          <!-- CONTACT SECTION END-->
          <!-- <div id="footer">
            &copy 2014 yourdomain.com | All Rights Reserved |  <a href="http://binarytheme.com" style="color: #fff" target="_blank">Design by : binarytheme.com</a>
          </div> -->


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

   <script>
   function check(){
     var name = $('#name').val();
     var email = $('#email').val();
     var message = $('#message').val();
     if(name != '' && email != '' && message != ''){
       $('#contact_btn').prop('disabled', false);
     }
   }

   $('#contact_btn').click(function () {
     var name = $('#name').val();
     var email = $('#email').val();
     var message = $('#message').val();
     $.ajaxSetup({
       headers: {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
     });

     form = new FormData();
     form.append('name', name);
     form.append('email', email);
     form.append('message', message);

     $.ajax({
       type: 'post',
       data: form,
       cache: false,
       contentType: false,
       processData: false,
       url: "{{ url('contact') }}",
       success: function (response) {
         console.log(response);
         if (response == "successfully") {
           toastr.success('Thank you for Contacting Us', { timeOut: 5000 });
           // window.location.href = "/landing";
         }
       }
     });
   });
 </script>



@endsection
