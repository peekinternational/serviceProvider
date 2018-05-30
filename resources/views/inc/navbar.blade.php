       <header class="navbar navbar-inverse navbar-fixed-top">
              <div class="container">
                 <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->
                    <!-- logo -->
                    <a class="navbar-brand logo" href="{{url('/')}}">
           <img class="logo-white custumelogo" src="{{url('images/logo.png')}}" alt="logo" style="width: 20%;" />
        </a>
                    <!-- /logo -->
                 </div>
                 <!-- main nav -->
                 <nav class="collapse navbar-collapse navbar-left">
                    <ul id="nav" class="nav navbar-nav menu">
                      <li><a href="{{url('/')}}">Home</a></li>
                      <li class="dropdown" ><a class="dropbtn" href="#">Service Provider <span class="caret"></span> </a>
                      <ul class="dropdown-menu dropdown_list">
                              <li ><a href="{{url('skill_search/'.$skill='Plumber')}}">Plumber</a></li>
                              <li ><a href="{{url('skill_search/'.$skill='electrician')}}">Electrician</a></li>
                              <li ><a href="{{url('skill_search/'.$skill='Carpenter')}}">Carpenter</a></li>
                              <li ><a href="{{url('skill_search/'.$skill='painter')}}">Painter</a></li>
                              <li ><a href="{{url('skill_search/'.$skill='welder')}}">Welder</a></li>
                              <li ><a href="{{url('skill_search/'.$skill='Mechanic')}}">Auto-Mechanic</a></li>
                      </ul>
                      </li>
                      <li ><a href="{{url('people')}}">People</a></li>
                      <li ><a href="#">About</a></li>
                      <li ><a href="#">Contact</a></li>
                      </nav>
                      <nav class="collapse navbar-collapse navbar-right">
                         <ul id="nav" class="nav navbar-nav menu">
                      <li id="logout" class="dropdown">
                        <a class="dropbtn" href="#">
                          {{session()->get('name')}}</a>
                          <ul class="dropdown-menu dropdown_list">
                            <?php $id=session()->get('ses'); ?>
                                  <li ><a href="{{url('profile_view/'.$id)}}">Profile</a></li>
                                  <li ><a href="{{url('edit/'. $id)}}">Setting</a></li>
                                  <li ><a href="{{url('logout')}}">Log out</a></li>
                          </ul>
                        </li>
                      <li id="login"><a href="{{url('login')}}">Login</a></li>
                      <li id="register"><a href="{{url('/register')}}">Register</a></li>
                    </ul>
                 </nav>
                 <!-- /main nav -->
              </div>
           </header>
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
});
    </script>
