
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
              <li ><a href="{{url('skill_search/'.$skill='Plumber')}}">Plumber</a></li>
              <li ><a href="{{url('skill_search/'.$skill='electrician')}}">Electrician</a></li>
              <li ><a href="{{url('skill_search/'.$skill='Carpenter')}}">Carpenter</a></li>
              <li ><a href="{{url('skill_search/'.$skill='painter')}}">Painter</a></li>
              <li ><a href="{{url('skill_search/'.$skill='welder')}}">Welder</a></li>
              <li ><a href="{{url('skill_search/'.$skill='Mechanic')}}">Auto-Mechanic</a></li>
              <li ><a href="{{url('skill_search/'.$skill='Cook')}}">Cook</a></li>
              <li ><a href="{{url('skill_search/'.$skill='Gardener')}}">Gardener</a></li>
              <li ><a href="{{url('skill_search/'.$skill='Sweeper')}}">Sweeper</a></li>
          </ul>
          </li>
          <li ><a href="{{url('people')}}">People</a></li>
          <li ><a href="#">About</a></li>
          <li ><a href="#">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
             <li id="logout" class="dropdown"> 
            <a class="dropbtn" href="#"><i class="fa fa-cog"></i>
              {{session()->get('name')}}</a>
              <ul id="profile_list" class="dropdown-menu dropdown_list" >
                <?php $id=session()->get('ses'); ?>
                      <li ><a href="{{url('profile_view/'.$id)}}"><i class="fa fa-user"></i>&nbsp;&nbsp;Profile</a></li>
                      <li ><a href="{{url('edit/'. $id)}}"><i class="fa fa-key"></i>&nbsp;&nbsp;Setting</a></li>
                      <li ><a href="{{url('logout')}}"><i class="fa fa-sign-out"></i>&nbsp;&nbsp;Log out</a></li>
              </ul>
            </li>
          <li id="login"><a href="{{url('login')}}"><i class="fa fa-sign-in"></i>&nbsp;&nbsp;Login</a></li>
          <li id="register"><a href="{{url('register')}}"><i class="fa fa-user-plus"></i>&nbsp;&nbsp;Register</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<script>
           $(document).ready(function(){
             $("logout").hide();
            <?php
            $name=session()->get('name');
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
