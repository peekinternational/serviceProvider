@extends('admin.layouts.app')
@section('content')
<div class="main-panel">
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">All Users</h4>
                        <div class="col-md-2 col-md-offset-10">
                          <a href="{{url('/admin/creatUser')}}" class="btn btn-success" type="button" name="button" style="Background: #87CB16; color: white; margin-top: -45px;">Add New</a>
                        </div>
                        <!-- <p class="category">Here is a subtitle for this table</p> -->
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>ID</th>
                              <th>User Name</th>
                              <th>Provider Name</th>
                              <th>Work Status</th>
                              <th>Amount</th>
                              <th colspan="2">Action</th>
                            </thead>
                            <tbody>
                              @if(count($user_get)>0)
                              @foreach($user_get as $user)
                                <tr id="tbl_show{{$user->id}}">
                                  <td>{{$user->wh_id}}</td>
                                  <td>{{$user->name}}</td>
                                  <td>{{$user->name}}</td>
                                  <td>{{$user->work_status}}</td>
                                  <td>{{$user->amount}}</td>
                                  <td><a href="{{url('/admin/editUser/'.$user->id)}}"><span class='fa fa-edit'></td>
                                  <td><a data-toggle="modal"  onclick="delete_user('{{$user->id}}');"><span class='fa fa-remove' style="color: red;"></td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script>
  function delete_user(id) {
    // alert(id);
    if (confirm('Are you sure want to delete this user')) {
      	$.ajax({
      		url: "{{url('delete_user')}}/"+id,
      		success: function (response) {
      			console.log(response);
      			if (response == "1") {
              $('#tbl_show'+id).remove();

      			}
      		}
      	});
    }
  }
</script>


@endsection
