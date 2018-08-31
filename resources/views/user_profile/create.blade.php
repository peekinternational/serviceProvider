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
    <label>Email:</label>
    <input type="email" name="email" class="form-control"  placeholder="abc@gmail.com">
  </div>
  <div class="form-group">
    <label>Password:</label>
    <input type="password" name="password" id="pwd" onkeyup='checklen();' class="form-control" onblur="sendpassword(this.value)" placeholder="Enter Password" required="">
    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon " id="toggle-passwords"></span>
    <span id='length'></span>
  </div>
  <div class="form-group">
    <label>Confirm Password:</label>
    <input type="password" name="password_confirmation" id="confirm_password" onkeyup='check();' class="form-control"  placeholder="Confirm Password" required="">
    <span id='message'></span>
  </div>
  <label>User Type</label>
  <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-user"></i></span>
    <select class="form-control" name="type" id="type">
      <option value="provider">Provider</option>
      <option value="serviceUser">Service User</option>
    </select>
  </div><br>
   <div class="">
    <input type="checkbox" name="agree" value="agree" id="agree" required="" >
     <label for="agree">
        <p class="terms-condition"> <a href="#">Terms of Services</a> (TOS) <a href="#">Privacy Policy</a>
        I agree with </p>
      </label>
    </div>
  <!-- <input id="page_submit" type="button" class="btn btn-primary btn-block" value="Submit"> -->
  <button type="submit" id="page_submit" class="btn btn-primary form-control" name="button">Register</button>
  <p class="text-center show-loginBox">Already Have Account? <a href="{{url('login')}}">Login Here</a></p>
</form>
</div>
</div>
</div>
 <script>
  // check length of password
   var checklen = function()
     {
     if(document.getElementById('pwd').value.length<6)
 {
     document.getElementById('length').style.color = 'red';
     document.getElementById('length').innerHTML = 'Password is too short';
}
  else     document.getElementById('length').innerHTML = ' ';
     }
     // <!-- ------------------------------  Match Function password ------------------------     -->
var check = function()
{
  if (document.getElementById('pwd').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'Password Match';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Password not matching';
  }
}
  // show password clik on show
 $(document).ready(function(){
  // function to hide and show password
   function shows() {
    var p = document.getElementById('pwd');
    p.setAttribute('type', 'text');
    var Q = document.getElementById('confirm_password');
    Q.setAttribute('type', 'text');
}

function hides() {
    var p = document.getElementById('pwd');
    p.setAttribute('type', 'password');
      var Q = document.getElementById('confirm_password');
    Q.setAttribute('type', 'password');
}

var pwShowns = 0;

document.getElementById("toggle-passwords").addEventListener("click", function () {
    if (pwShowns == 0) {
        pwShowns = 1;
        shows();
    } else {
        pwShowns = 0;
        hides();
    }
}, false);
});

 //  $(document).ready(function () {
 // // Password length and password match

 //  });
//   $.ajaxSetup({
//     headers: {
//         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//     }
// });

//   $("#page_submit").click(function(e) {
//     $.ajax({
//       type: 'post',
//       data: $('form.form_registeration').serialize(),
//       url: "{{ url('create_r') }}",
//       success: function(response){
//         console.log(response);
//         if(response == "successfully"){

//           window.location.href = "{{ url('/login') }}";
//         }else {
//             window.location.href = "{{ url('/register') }}";
//         }

//       },
//       error: function (data) {
//       console.log(data);
//       var errors = data.responseJSON;

//       var vErrors = '';
//     if(errors.errors.name){
//           vErrors += '<li style="list-style-type: none;">' +errors.errors.name+ '</li>';
//       }
//       if(errors.errors.phone){
//             vErrors += '<li style="list-style-type: none;">' +errors.errors.phone+ '</li>';
//         }
//         if(errors.errors.password){
//               vErrors += '<li style="list-style-type: none;">' +errors.errors.password+ '</li>';
//           }
//             console.log("html"+vErrors);
//             $('div.alert.alert-danger.error-group').show();
//           $('div.alert.alert-danger.error-group').html('<ul>'+vErrors+'</ul>');
//           $('.form_registeration button[name="save"]').prop('disabled',false);

//     }
//     });
//   });

</script>
@endsection
