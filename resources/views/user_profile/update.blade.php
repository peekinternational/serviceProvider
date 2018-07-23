  @extends('layouts.app')
  @section('content')
  <div class="container" id="container">
    <div class="row">
      <h1 align="center">General Account Settings</h1>
      <!-- Side bar div -->
      <div class=" col-md-6 col-sm-12 sidebar">
        <div class="setting_head text-center" >
          <b> General Settings </b>
        </div>
        <div>
          <div class="setting_item">
            <i class="fa fa-key">&nbsp; <a href="javascript:;" onclick="switchPage('password')"> Change Password </a> </i> 
          </div>
          <hr>
          <div class="setting_item">
            <i class="fa fa-phone">&nbsp; <a href="javascript:;" onclick="switchPage('contact')"> Contact Number </a> </i> 
          </div>
          <hr>
          <div class="setting_item">
            <i class="fa fa-cog">&nbsp; <a href="javascript:;"> Account Deactivation </a> </i> 
          </div>
          <hr>
        </div>
      </div>

      <!-- Side bar div end -->
      <div id="changePwd" class="col-md-6 col-sm-12 SettingBox">
        @include('inc.messages')
        <h3 align="center">Change Password</h3>
        <form action="{{url('changepwd/'.$user->id)}}" method="post">
          {{csrf_field()}}
          <div>
            <label>Old Password</label>
          </div>
          <div class="form-group">
            <input type="password" name="oldPassword" required="" class="form-control">
          </div>
          <div>
            <label>Old Password</label>
          </div>
          <div class="form-group">
            <input type="password" name="newPassword" required="" class="form-control">
          </div>
          <div>
            <label>Old Password</label>
          </div>
          <div class="form-group">
            <input type="password" name="NewConPassword" required="" class="form-control">
          </div>
          <div class="form-group">
            <input type="submit" class="form-control btn btn-primary"  name="changPwd" value="Change Password">
          </div>
        </form>
      </div>
      <!-- Change and update contact info -->
      <div id="changeContact" style="display: none;" class="col-md-6 col-sm-12 SettingBox">
        @include('inc.messages')
        <h3 align="center">Update Contact</h3>
        {{csrf_field()}}
        <div id="oldContact">
          <label>Current Contact Number:</label> &nbsp; {{$user->phone}}
            <br>          
        </div>
        <div> 
          <h6><a href="javascript:;" onclick="switchPage('addnew')" id="addbtn" >Add new contact </a> </h6>
          <hr></div>
          <div id="addnew"  style="display: none;">
            <form action="{{url('change/contact/'.$user->id)}}" method="post">
              {{csrf_field()}}
              <div class="form-group" id="newCont">
                <label>Enter new Number</label>
                <input type="Number"  class="form-control" required="" name="new_no">
              </div>
              <div class="form-group">
                 <button type="button" name="sendSms" id="sendSMS" onclick="switchPage('sendSMS')" class="btn btn-primary" value="Cancel">Send SMS </button>
                 <!-- cancel sending sms-->
                <button type="button" name="cancel" id="cancel" onclick="$('#oldContact').show();$('#addnew').hide(); $('#addbtn').show();" class="btn btn-default" value="Cancel">Cancel</button>
              </div>
              <div class="form-group" style="display: none;" id="code">
                <label> Enter Received Code Here</label>
                <input type="Number" name="code" class="form-control" >
                <br>
                <input type="submit" name="newContact" class="btn btn-primary" value="Submit">
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
    @endsection


    <script>
  // Switch Between tags
  function switchPage(page){
    if(page == 'contact'){
      $('#changePwd').hide(); 
      $('#changeContact').show();
  var href = "{{ url('edit/Contact') }}";
 if(page == 'addnew'){
      $('#addnew').show();
 }
}else  if(page == 'password'){
  $('#changeContact').hide(); 
  $('#changePwd').show();
  var href = "{{ url('edit/password') }}";
}
else if(page == 'addnew'){
      $('#addnew').show();
       $('#addbtn').hide();
       $('#oldContact').hide();
 }
 else if(page == 'sendSMS')
 {
  $('#sendSMS').hide();
  $('#cancel').hide();
  $('#newCont').hide();
   $('#code').show();
 }
// window.parent.history.pushState({path:href},'',href);
}
</script>