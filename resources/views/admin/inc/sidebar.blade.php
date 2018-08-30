
<div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

 <!--

     Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
     Tip 2: you can also add an image using data-image tag

 -->

   <div class="sidebar-wrapper">
         <div class="logo">
             <a href="http://www.creative-tim.com" class="simple-text">
                 Creative Tim
             </a>
         </div>

         <ul class="nav">
             <li class="active">
                 <a href="{{url('/admin/dashboard')}}">
                     <i class="	fa fa-tachometer"></i>
                     <p>Dashboard</p>
                 </a>
             </li>
             <li>
                 <a href="{{url('/admin/user')}}">
                     <i class="fa fa-users"></i>
                     <p>All User</p>
                 </a>
             </li>
             <li>
                 <a href="{{url('/admin/table')}}">
                     <i class="fa fa-user"></i>
                     <p>Vendors</p>
                 </a>
             </li>
             <li>
                 <a href="{{url('/admin/add_category')}}">
                     <i class="fa fa-envelope-open"></i>
                     <p>Subscriber</p>
                 </a>
             </li>
             <li>
                 <a href="{{url('/admin/categories')}}">
                     <i class="fa fa-th-large"></i>
                     <p>Add Categories</p>
                 </a>
             </li>
             <li>
                 <a href="maps.html">
                     <i class="fa fa-credit-card"></i>
                     <p>Payments</p>
                 </a>
             </li>
             <li>
                 <a href="{{url('/admin/notification')}}">
                     <i class="fa fa-sitemap"></i>
                     <p>Lead Assign</p>
                 </a>
             </li>
     <!-- <li class="active-pro"> -->
     <li class="">
                 <a href="{{url('logout')}}">
                     <i class="fa fa-power-off"></i>
                     <p>Logout</p>
                 </a>
             </li>
         </ul>
   </div>
 </div>
