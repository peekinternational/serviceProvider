@extends('admin.layouts.app')
@section('content')
<div class="main-panel">
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
							<div class="card">

									<div class="header">
											<h4 class="title">Email Statistics</h4>
											<p class="category">Last Campaign Performance</p>
									</div>
									<div class="content">

											<div class="">
												<h3>Update User Profile </h3>
												<div class="individual-form">
													<div id="w_error" class="alert alert-danger alert-dismissible" style="display: none;">
													  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
													  <span>You haven't change any thing</span>
													</div>
													<div id="worker_success" class="alert alert-success alert-dismissible" style="display: none;">
														<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
														<span>Information Updated successfully</span>
													</div>
													<form  style="padding-top: 20px;">
														{{csrf_field()}}
                            <div class="row">
                              <div class="col-md-offset-2 col-md-2" style="text-align: -webkit-right; padding-right: 0;">
                                <div class="profile-img">
                                  <?php if (!empty($user_get->image)): ?>
                                    <img src="{{url('/img/profile/'.$user_get->image)}}" class="eo-c-logo" alt="{{$user_get->image}}">
                                    <?php else: ?>
                                      <img src="{{url('/img/profile-logo.jpg')}}" class="eo-c-logo">
                                  <?php endif; ?>
                                  <p class="icon">
                                    <label for="edit-Img" class="label label-success">
                                      <input type="file" name="" id="edit-Img" class="change_profile">
                                      Edit <i class="fa fa-edit"></i>
                                    </label>
                                </div>
                              </div>
                            </div>
													  	<div class="row">
													  		<div class="form-group col-md-6 col-md-offset-2" style="padding-right: 0;">
														  		<label>Name</label>
																	<input type="hidden" name="w_id" id="w_id" value="{{$user_get->id}}">
														  		<div class="input-group">
														  			<span class="input-group-addon"><i class="fa fa-user-o"></i></span>
														    		<input type="text" name="w_name" id="w_name" class="form-control worker_input" placeholder="Worker Name" value="{{$user_get->name}}">
														  		</div>
													  		</div>
													  	</div>
													  	<div class="form-group col-md-6 col-md-offset-2">
													  		<label>Valid Mobile</label>
													  		<div class="input-group">
													    		<span class="input-group-addon"><i class="fa fa-mobile"></i></span>
													    		<input type="text" name="w_mobile" id="w_mobile" class="form-control worker_input" placeholder="Mobile" value="{{$user_get->phone}}">
													  		</div>
													  	</div>
													  	<div class="form-group col-md-6 col-md-offset-2" style="padding-right: 0;" >
													  		<label>Email</label>
													  		<div class="input-group">
													    		<span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
													    		<input type="text" name="email" id="email" class="form-control worker_input" placeholder="Email" value="{{$user_get->email}}">
													  		</div>
													  	</div>
													  	<div class="form-group col-md-6 col-md-offset-2" style="padding-right: 0;" >
													  		<label>Skill</label>
													  		<div class="input-group">
													    		<span class="input-group-addon"><i class="fa fa-flask"></i></span>
                                  <select class="form-control" id="skill">
                                    <option value="Plumber"  {{ $user_get->skill == 'Plumber' ? 'selected="selected"' : '' }}>Plumber</option>
                                    <option value="Electrician" {{ $user_get->skill == 'Electrician' ? 'selected="selected"' : '' }}>Electrician</option>
                                    <option value="Welder" {{ $user_get->skill == 'Welder' ? 'selected="selected"' : '' }}>Welder</option>
                                    <option value="Painter" {{ $user_get->skill == 'Painter' ? 'selected="selected"' : '' }}>Painter</option>
                                    <option value="Carpenter" {{ $user_get->skill == 'Carpenter' ? 'selected="selected"' : '' }}>Carpenter</option>
                                    <option value="Mechanic" {{ $user_get->skill == 'Mechanic' ? 'selected="selected"' : '' }}>Mechanic</option>
                                    <option value="Cook" {{ $user_get->skill == 'Cook' ? 'selected="selected"' : '' }}>Cook</option>
                                    <option value="Gardener" {{ $user_get->skill == 'Gardener' ? 'selected="selected"' : '' }}>Gardener</option>
                                    <option value="Sweeper" {{ $user_get->skill == 'Sweeper' ? 'selected="selected"' : '' }}>Sweeper</option>
                                  </select>
													    		<!-- <input type="text" name="skill" id="skill" class="form-control worker_input" placeholder="Email" value="{{$user_get->email}}"> -->
													  		</div>
													  	</div>
															<div class="row">
												  		<div class="form-group col-md-2 col-md-offset-3  nxt-btn" style="padding-left: 0;">
												  			<button type="button" id="wEdit_btn" class="btn login-btn btn-block" style="Background: #FF6D0B; border: #FF6D0B; color: white;">Update <i class="fa fa-arrow-circle-o-right pull-right" aria-hidden="true"></i></button>
												  		</div>
															</div>
													</form>
												</div>

												<div class="form-group nxt-btn">
													<a  href="{{url('/admin/user')}}" class="btn btn-primary" style="Background: #3c3c9d; color: white;"><i class="fa fa-arrow-circle-o-left pull-left" aria-hidden="true"></i> Back </a>
										  			<!-- <a  href="{{url('/accounts/workerDashboard')}}" class="btn save-btn">Next <i class="fa fa-arrow-circle-o-right pull-right" aria-hidden="true"></i></a> -->
										  		</div>
											</div>

											<!-- <div class="footer">

													<hr>
													<div class="stats">
															<i class="fa fa-clock-o"></i> Campaign sent 2 days ago
													</div>
											</div> -->
									</div>
							</div>
            </div>
        </div>
    </div>
</div>
</div>


<script>
// $(document).ready(function () {
// 	alert("abc");
// });
$('#wEdit_btn').click(function () {
	// e.preventDefault();
	// var form_value = $(this).serialize();
	var _token = $("input[name='_token']").val();
	var id = $('#w_id').val();
	var name = $('#w_name').val();
	var phone = $('#w_mobile').val();
	var email = $('#email').val();
	var skill = $('#skill').val();
	// alert(_token);
	if (name == "" || phone=="" || email=="" || skill=="") {
		$("#w_error").show();
		setTimeout(function () {
			$("#w_error").hide();
		},3000);
		return 0;
	}
	// alert("asd");


	form = new FormData();
	form.append('_token', _token);
	form.append('id', id);
	form.append('name', name);
	form.append('phone', phone);
	form.append('email', email);
	form.append('skill', skill);

	console.log(form);
// {id: id, w_name: w_name, w_mobile:w_mobile, w_email: email, _token: _token}
	$.ajax({
		type: 'post',
		data: form,
		cache: false,
		contentType: false,
		processData: false,
		url: "{{url('edit_user')}}",
		success: function (response) {
			console.log(response);
			if (response == "1") {
				$("#worker_success").show();
				setTimeout(function () {
					$("#worker_success").hide();
				},3000);
				return 0;


    }else {
      $("#w_error").show();
      setTimeout(function () {
        $("#w_error").hide();
      },3000);
      return 0;
    }
		}
	});
});
</script>
@endsection
