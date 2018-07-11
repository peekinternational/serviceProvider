@extends('layouts.app')

@section('content')
<div class="container" id="container">
  <div class="row">
   <div id="loginBox" class="col-md-6 col-md-offset-3 loginBox">
<h1 align="center">Registeration</h1>
@include('inc.messages')
<div class="alert alert-danger error-group" style="display:None">

</div>
<form class="form_registeration" method="post" action="{{url('create_r')}}">
{{csrf_field()}}
  <div class="form-group">
    <label>Full Name:</label>
    <input type="text" name="name" class="form-control" placeholder="Enter Full Name" required="">
  </div>
  <div class="form-group">
    <label>Phone Number:</label>
    <input type="number" name="phone" class="form-control"  placeholder="03123456789" required="">
  </div>
  <div class="form-group">
    <label>Password:</label>
    <input type="password" name="password" class="form-control"  placeholder="Enter Password" required="">
  </div>
  <div class="form-group">
    <label>Confirm Password:</label>
    <input type="password" name="password_confirmation" class="form-control"  placeholder="Confirm Password" required="">
  </div>
   <div>
    <input type="checkbox" name="agree" value="agree" id="agree" required="" >
        <p class="terms-condition"> <a href="#">Terms of Services</a> (TOS) <a href="#">Privacy Policy</a>
        I agree with </p>
      </div>
  <!-- <input id="page_submit" type="button" class="btn btn-primary btn-block" value="Submit"> -->
  <p class="text-center show-loginBox">Already Have Account? <a href="{{url('login')}}">Login Here</a></p>

  <button type="submit" id="page_submit" class="btn btn-primary" name="button">Submit</button>
</form>
</div>
</div>
</div>
<!-- <script>
  $(document).ready(function () {

  });
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

  $("#page_submit").click(function(e) {
    $.ajax({
      type: 'post',
      data: $('form.form_registeration').serialize(),
      url: "{{ url('create_r') }}",
      success: function(response){
        console.log(response);
        if(response == "successfully"){

          window.location.href = "{{ url('/login') }}";
        }else {
            window.location.href = "{{ url('/register') }}";
        }

      },
      error: function (data) {
      console.log(data);
      var errors = data.responseJSON;

      var vErrors = '';
    if(errors.errors.name){
          vErrors += '<li style="list-style-type: none;">' +errors.errors.name+ '</li>';
      }
      if(errors.errors.phone){
            vErrors += '<li style="list-style-type: none;">' +errors.errors.phone+ '</li>';
        }
        if(errors.errors.password){
              vErrors += '<li style="list-style-type: none;">' +errors.errors.password+ '</li>';
          }
            console.log("html"+vErrors);
            $('div.alert.alert-danger.error-group').show();
          $('div.alert.alert-danger.error-group').html('<ul>'+vErrors+'</ul>');
          $('.form_registeration button[name="save"]').prop('disabled',false);

    }
    });
  });

</script> -->
@endsection
