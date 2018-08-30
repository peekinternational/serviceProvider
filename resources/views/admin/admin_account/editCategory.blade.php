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
												<h3>Update Category </h3>
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
                                  <?php if (!empty($user_get->skill_image)): ?>
                                    <img src="{{url('images/skill_images/'.$user_get->skill_image)}}" class="eo-c-logo" alt="{{$user_get->skill_image}}">
                                    <?php else: ?>
                                      <img src="{{url('/images/category.png')}}" class="eo-c-logo">
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
														  		<label>Category Name</label>
														  		<div class="input-group">
                                    <input type="hidden" name="w_id" id="w_id" value="{{$user_get->skill_id}}">
														  			<span class="input-group-addon"><i class="fa fa-th-large"></i></span>
														    		<input type="text" name="w_name" id="w_name" class="form-control worker_input" placeholder="Category Name" value="{{$user_get->skill_name}}">
														  		</div>
													  		</div>
													  	</div>

                              <!-- <div class="row">
                              <div class="form-group col-md-2 col-md-offset-2">
          								  		<label>Worker Picture</label><br>
          								  		<label class="btn btn-file" for="w_image">Upload Picture
          								  			<input type="file" name="w_image" id="w_image">
          								  		</label>
          								  	</div>
                            </div> -->

															<div class="row">
												  		<div class="form-group col-md-2 col-md-offset-3  nxt-btn" style="padding-left: 0;">
												  			<button type="button" id="cEdit_btn" class="btn login-btn btn-block" style="Background: #FF6D0B; border: #FF6D0B; color: white;">Update <i class="fa fa-arrow-circle-o-right pull-right" aria-hidden="true"></i></button>
												  		</div>
															</div>
													</form>
												</div>

												<div class="form-group nxt-btn">
													<a  href="{{url('/admin/categories')}}" class="btn btn-primary" style="Background: #3c3c9d; color: white;"><i class="fa fa-arrow-circle-o-left pull-left" aria-hidden="true"></i> Back </a>
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
$('#cEdit_btn').click(function () {
	var _token = $("input[name='_token']").val();
  var id = $('#w_id').val();
	var skill_name = $('#w_name').val();
	// alert(_token);
	if (skill_name == "") {
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
	form.append('skill_name', skill_name);

	console.log(form);
// {id: id, w_name: w_name, w_mobile:w_mobile, w_email: email, _token: _token}
	$.ajax({
		type: 'post',
		data: form,
		cache: false,
		contentType: false,
		processData: false,
		url: "{{url('edit_category')}}",
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

<script>
$(document).on('change','#edit-Img',function(e){
	e.preventDefault();
	$('#loaderIcon').show();
	if ($('#edit-Img').val()) {
var image = $('.change_profile')[0].files[0];
var _token = $("input[name='_token']").val();
var id = $('#w_id').val();
var skill_name = $('#w_name').val();
// console.log(image);
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	form = new FormData();
	form.append('image', image);
  form.append('_token', _token);
	form.append('id', id);
	form.append('skill_name', skill_name);

	$.ajax({
		type: 'post',
		data: form,
		cache: false,
		contentType: false,
		processData: false,
		url: "{{ url('edit_category') }}",
		success: function (response) {
			console.log(response);
			if (response) {
				$('#loaderIcon').hide();
				$('.eo-c-logo').attr('src','<?= url('images/skill_images')?>/'+response);
				$("#Individual_success").show();
				setTimeout(function () {
		      $("#Individual_success").hide();
		    },3000);

			}
		}
	});
}
});
</script>
@endsection
