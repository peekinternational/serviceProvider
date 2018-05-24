@extends('layouts.app')

@section('content')
<div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
          <div class="text-center">
              <h1>My Profile</h1>
          </div>
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo ucfirst($user->name); ?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center">
                  <?php if (!empty($user->image)): ?>
                    <img src="{{url('img/'.$user->image)}}" class="img-responsive pf-image " alt="{{$user->image}}">
                    <?php else: ?>
                        <img src="{{asset('img/profile-logo.jpg')}}" class="img-responsive pf-image" alt="{{$user->image}}">
                  <?php endif; ?>
                   <!-- class="img-circle img-responsive"  -->
                 </div>
                <div class=" col-md-9 col-lg-9 ">
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Skill</td>
                        <td>{{$user->skill}}</td>
                      </tr>
                      <tr>
                        <td>Date of Birth</td>
                        <td>01/24/1988</td>
                      </tr>
                        <tr>
                        <td>Home Address</td>
                        <td>{{$user->address}}</td>
                      </tr>
                      <tr>
                        <td>Phone Number</td>
                        <td>{{$user->phone}}
                        </td>
                      </tr>
                      <tr>
                        <td>Fee</td>
                        <td>{{$user->fee}}</td>
                      </tr>
                      <tr>
                        <td>Experience</td>
                        <td>{{$user->experience}}</td>
                      </tr>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        <span class="pull-right">
                            <a href="{{url('/update/'. $user->id)}}" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                            <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="fa fa-remove"></i></a>
                        </span>
                    </div>

          </div>
        </div>
      </div>
    </div>

@endsection
