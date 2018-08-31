
<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top navbar-custom">
  <div class="container">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed"  data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span style="background-color:#fff" class="icon-bar"></span>
        <span style="background-color:#fff" class="icon-bar"></span>
        <span style="background-color:#fff" class="icon-bar"></span>
      </button>
      <!-- logo -->
      <a class="navbar-brand logo" href="{{url('/')}}">
        <img class="customlogo" src="{{url('images/logo.png')}}" alt="logo" style="width: 20%;" />
      </a>
      <!-- /logo -->
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-left">
        <li><a href="{{url('/')}}">Home</a></li>
        <li class=" dropdown" id="dropdown" ><a href="#">Service Provider <span class="caret"></span> </a>
          <ul class="dropdown-menu dropdown_list" id="dropmenu">
            <li ><a href="{{url('skill_search/')}}?skill=plumber">Plumber</a></li>
            <li ><a href="{{url('skill_search/')}}?skill=electrician">Electrician</a></li>
            <li ><a href="{{url('skill_search/')}}?skill=carpenter">Carpenter</a></li>
            <li ><a href="{{url('skill_search/')}}?skill=painter">Painter</a></li>
            <li ><a href="{{url('skill_search/')}}?skill=welder">Welder</a></li>
            <li ><a href="{{url('skill_search/')}}?skill=Mechanic">Auto Mechanic</a></li>
            <li ><a href="{{url('skill_search/')}}?skill=Cook">Cook</a></li>
            <li ><a href="{{url('skill_search/')}}?skill=Gardener">Gardener</a></li>
            <li ><a href="{{url('skill_search/')}}?skill=Sweeper">Sweeper</a></li>
          </ul>
        </li>
        <li ><a href="{{url('people')}}?people=7">People</a></li>
        <li ><a href="{{url('landing')}}">About</a></li>
        <li ><a href="{{url('/contact')}}">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right" style="margin-top: 2px;">
        <li id="logout" class="dropdown">
          <a class="dropbtn" href="#"><i class="fa fa-cog"></i>
            @if(\Session::has('u_session'))
            {{session()->get('u_session')->name}}<span class="caret"></span> </a>
            <ul id="profile_list" class="dropdown-menu dropdown_list" >
              <?php $id=session()->get('u_session')->id; ?>
              <li ><a href="{{url('profile_view/'.$id)}}"><i class="fa fa-user"></i>&nbsp;&nbsp;Profile</a></li>
              <li ><a href="{{url('edit/'. $id)}}"><i class="fa fa-key"></i>&nbsp;&nbsp;Setting</a></li>
              <li ><a href="{{url('logout')}}"><i class="fa fa-sign-out"></i>&nbsp;&nbsp;Log out</a></li>
            </ul>
          </li>
          @else
          <li id="login"><a href="{{url('login')}}" style="padding-top: 10px;"><i class="fa fa-sign-in"></i>&nbsp;&nbsp;Login</a></li>
          <li id="register"><a href="{{url('register')}}" style="padding-top: 10px;"><i class="fa fa-user-plus"></i>&nbsp;&nbsp;Register</a></li>
        </ul>
        @endif
      </div><!--/.nav-collapse -->
    </div>
  </nav>

  <!-- Script -->
  <script>
  $(document).ready(function(){
    $("logout").hide();
    <?php
    if (\Session::has('u_session')) {
      $name=session()->get('u_session')->name;
    }else{
      $name="";
    }


    if($name==""){
      ?>
      $("#logout").hide();
      $("#login").show();
      <?php }
      else {
        ?>
        $("#logout").show();
        $("#login").hide();
        $("#register").hide();
        <?php
      }
      ?>
      // toggle menu bar

      $("#dropdown").click(function(){
        $("#profile_list").hide();
        $("#dropmenu").toggle();
      });
      //  prfile option dropdown
      $(".dropbtn").click(function(){
        $("#dropmenu").hide();
        $("#profile_list").toggle();
      });

    });
  </script>
