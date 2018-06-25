@extends('layouts.app')
@section('content')

<section id="company-box">
   <div class="container" id="container">
    <div class="col-md-8 company-box-left">
		<h4>Have queries? We are here to help!</h4>
<h5>Frequently Asked Questions</h5>
<span>Save time and find answers to popular users queries, visit Frequently Asked Questions.</span>
<hr>
<h4>Want to Hire?</h4>
<ul style="margin-left:36px">
<li>Create your Account by visiting<a href="{{url('register')}}"> New User Registration</a></li>
<li> Logon to <a href="{{url('login')}}">Your Account</a> and visit Update Profile</li>
<li> Update your data by providing valid information about you and your skills</li>
</ul>
<hr>
<h4>Want to Get service Provider</h4>
Very simple and takes only few minutes.
 Explore various<a href="{{url('people')}}">  Service Providers </a> having Desired skills and exprerience.
<hr>
<h4>Legal Stuff</h4>
<ul style="margin-left:36px">
<li><a href="#">  Privacy Policy</a></li>
<li><a href="#">  Picture Policy</a></li>
<li><a href="#">  Terms of Services</a></li>
</ul>

	</div>
        <div class="col-md-4">
            <div class="company-box-right">
                <h4>Contact Details</h4>
                <hr>
                <div class="row">
                    <div class="col-md-3"><strong>Phone</strong></div>
                    <div class="col-md-9">here</div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-3"><strong>Email</strong></div>
                    <div class="col-md-9"><a href="#">here</a> </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-3"><strong>Adress</strong></div>
                    <div class="col-md-9">
                        here
                    </div>
                </div>
            </div>
 <!--  <div class="company-box-right">
            <h3>Help Query</h3>
           
            <hr>
            
            <form class="contact-us-form" method="post" action="#">
            {{ csrf_field() }}
            	<div class="form-group">
            		<label>Your Name</label>
            		<input type="text" class="form-control" name="name" required="" value="">
            	</div>
            	<div class="form-group">
            		<label>Your Email</label>
            		<input type="email" class="form-control" name="email" required="" value="">
            	</div>
            	<div class="form-group">
            		<label>Your Query</label>
            		<textarea class="form-control" name="msg" style="resize: vertical;" placeholder="Type your Query" rows="10" required=""></textarea>
            	</div>
            	<div class="form-group">
            		<button class="btn btn-block btn-primary" type="submit" name="submit">Submit</button>
            	</div>
            </form>
        </div> -->
        </div>
    </div>
</section>


@endsection