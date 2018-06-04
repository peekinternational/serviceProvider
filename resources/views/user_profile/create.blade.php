@extends('layouts.app')

@section('content')
<div class="container" id="container">
  <div class="row">
<div class="col-md-8 col-md-offset-2">


<h1 align="center">Registeration</h1>
<div class="alert alert-danger error-group" style="display:None">

</div>
<form class="form_registeration" method="post" action="#">

  <div class="form-group">
    <label>Full Name:</label>
    <input type="text" name="name" class="form-control" placeholder="Enter Full Name">
  </div>
  <div class="form-group">
    <label>Phone Number:</label>
    <input type="number" name="phone" class="form-control"  placeholder="Enter Phone">
  </div>
  <div class="form-group">
    <label>Password:</label>
    <input type="password" name="password" class="form-control"  placeholder="Enter Password">
  </div>
  <input id="page_submit" type="button" class="btn btn-primary" value="Submit" >
  <!-- <button type="submit" id="page_submit" class="btn btn-primary" name="button">Submit</button> -->
</form>
</div>
</div>
</div>
<script>
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
      // console.log("gggg"+errors.errors.name);
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
          // Pace.stop;
          // $('html, body').animate({scrollTop:$('#experience-edit').position().top}, 1000);
    }
      // e.preventDefault();
    });
  });

</script>
@endsection
