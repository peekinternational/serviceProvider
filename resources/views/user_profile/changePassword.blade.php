@extends('layouts.app')
@section('content')

<div class="main_content">
	<div class="container">
		<div class="col-md-12 login-box">
			<div class="col-md-offset-4 col-md-4">
				<h3 class="sigunp-title">Change Password</h3>
        <div id="pwd_error" class="alert alert-danger alert-dismissible" style="display: none;">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <span id="error_text"></span>
        </div>
        <!-- <div id="pwd_error2" class="alert alert-danger alert-dismissible" style="display: none;">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <span>Confirm password not match</span>
        </div> -->
        <div id="pwd_success" class="alert alert-success alert-dismissible" style="display: none;">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <span>Password Changed Successfully</span>
        </div>
				<form  action="" method="post">
          {{csrf_field()}}
			        <div class="form-group">
			          <input type="password" class="form-control" name="old_password" id="old_password" placeholder="Old Password" required="">
			        </div>
			        <div class="form-group">
			          <input type="password" class="form-control" name="new_password" id="new_password" placeholder="New Password" required="">
			        </div>
			        <div class="form-group">
			          <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required="">
			        </div>
              <!-- <input type="hidden" name="type" value="serviceUser"> -->
              <div class="form-group col-md-offset-3 col-md-12 nxt-btn">
                @if(\Session::has('u_session'))
                <?php $id=session()->get('u_session')->id; ?>
  							<a  id="back_btn" href="{{url('profile_view/'.$id)}}" class="btn back-btn btn-lg"><i class="fa fa-arrow-circle-o-left pull-left" aria-hidden="true"></i> Back </a>
                  @endif
                <!-- <a href="#" class="btn finish-btn btn-lg">Finish <i class="fa fa-arrow-circle-o-right pull-right" aria-hidden="true"></i></a> -->
  				  			<button type="submit" id="pwd_btn"  class="btn save-btn btn-warning btn-lg">Change <i class="fa fa-lock pull-right" aria-hidden="true"></i></button>
  				  		</div>
			        <!-- <div class="form-group">
			        	<button type="submit" id="pwd_btn" class="btn btn-fb btn-block btn-lg">Change</button>
			        </div> -->
			      </form>
			</div>
		</div>
	</div>
</div>


<script>
$('#pwd_btn').click(function (e) {
	e.preventDefault();
	// var form_value = $(this).serialize();
	var old_password = $('#old_password').val();
	var new_password = $('#new_password').val();
	var confirm_password = $('#confirm_password').val();
	if (old_password == "" || new_password =="" || confirm_password=="") {
		$("#pwd_error").show();
    $("#error_text").html('Please fill all fields');
		setTimeout(function () {
			$("#pwd_error").hide();
		},3000);
		return 0;
	}
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	form = new FormData();
	form.append('old_password', old_password);
	form.append('new_password', new_password);
	form.append('confirm_password', confirm_password);

	$.ajax({
		type: 'post',
		data: form,
		cache: false,
		contentType: false,
		processData: false,
		url: "{{url('change_pwd')}}",
		success: function (response) {
			console.log(response);
			if (response == "successfully") {
			// $('.worker_input').val('');
				$("#pwd_success").show();
				setTimeout(function () {
		      $("#pwd_success").hide();
		    },3000);

			}
      else if (response == "not_confirm") {
        $("#pwd_error").show();
        $("#error_text").html('Confirm Password not match');
        setTimeout(function () {
		      $("#pwd_error").hide();
		    },3000);
      }
      else if (response == "incorrect") {
        $("#pwd_error").show();
        $("#error_text").html('Incorrect Old password');
        setTimeout(function () {
		      $("#pwd_error").hide();
		    },3000);
      }
		}
	});
});
</script>
@endsection
