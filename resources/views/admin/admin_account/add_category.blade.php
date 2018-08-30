@extends('admin.layouts.app')
@section('content')



    <div class="main-panel">
      <div class="content">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-md-12">
                      <div class="card">
                          <div class="header">
                              <h4 class="title">Add Categories</h4>
                              <!-- <p class="category">Created using Roboto Font Family</p> -->
                          </div>
                          <div class="content">
                            <div class="individual-form">
    													<div id="w_error" class="alert alert-danger alert-dismissible" style="display: none;">
    													  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    													  <span>Please Enter Category Name and Picture</span>
    													</div>
    													<div id="worker_success" class="alert alert-success alert-dismissible" style="display: none;">
    														<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    														<span>New Category Created Successfully</span>
    													</div>
                            <form class="" action="" method="post">
                              {{csrf_field()}}
                            <div class="row">
                                <div class="form-group col-md-4" style="padding-right: 0;">
            								  		<label>Category Name</label>
            											<!-- <input type="hidden" name="w_id" id="w_id" value=""> -->
            								  		<div class="input-group">
            								  			<span class="input-group-addon"><i class="fa fa-th-large"></i></span>
            								    		<input type="text" name="skill_name" id="skill_name" class="form-control worker_input" placeholder="Category Name" value="">
            								  		</div>
            							  		</div>
                                </div>
                                <div class="row">
                                <div class="form-group col-md-2">
            								  		<label>Category Picture</label><br>
            								  		<label class="btn btn-file" for="w_image">Upload Picture
            								  			<input type="file" name="w_image" id="w_image">
            								  		</label>
            								  	</div>
                                <!-- Image Loader -->
            										<div id="loaderIcon" class="loaderIcon_franchise" style="display: none;"><img src="{{ asset('images/Spinner.gif')}}" alt="">
            										</div>
            										<!-- Image Loader Ends -->
                                </div>
                                <div class="row">
                                <div class="form-group col-md-2 nxt-btn">
              										<a  href="{{url('/admin/categories')}}" class="btn btn-primary" style="Background: #3c3c9d; border: #3c3c9d; color: white;"><i class="fa fa-arrow-circle-o-left pull-left" aria-hidden="true"></i> Back </a>
              									</div>
                                <div class="form-group col-md-2 nxt-btn" style="padding-left: 0;">
              										<button type="submit" id="skill_btn" class="btn login-btn btn-block" style="Background: #FF6D0B; border: #FF6D0B; color: white;">Add New <i class="fa fa-arrow-circle-o-right pull-right" aria-hidden="true"></i></button>
              									</div>
                                </div>
                              </form>



                          </div>
                      </div>
                  </div>

              </div>
          </div>
      </div>
</div>


<script>
$('#skill_btn').click(function (e) {
	e.preventDefault();
	// var form_value = $(this).serialize();
  var _token = $("input[name='_token']").val();
	var skill_name = $('#skill_name').val();
	var image = $('#w_image')[0].files[0];
  // alert(skill_name);
	if (skill_name == "") {
		$("#w_error").show();
		setTimeout(function () {
			$("#w_error").hide();
		},3000);
		return 0;
	}
	if (image != "") {
    $('#loaderIcon').show();
  }
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	form = new FormData();
  form.append('_token', _token);
	form.append('skill_name', skill_name);
	form.append('image', image);
console.log(form);
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
				$('#loaderIcon').hide();
			$('.worker_input').val('');
				$("#worker_success").show();
				setTimeout(function () {
		      $("#worker_success").hide();
		    },3000);

			}
		}
	});
});
</script>
@endsection
