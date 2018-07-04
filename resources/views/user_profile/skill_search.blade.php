@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 100px;">
  <div class="container">
		<div id="map">

  </div>


	<div class="container" id="container">
	    <div class="row" id="show_all">

	    </div>
    <div class="row">
      @if(count($user)>0)
      @foreach($user as $users)
        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 profile_card">
            <div class="well well-sm">
                <div class="row">

                    <div class="col-sm-12 text-center">
                      <div class="profile-show">
                          <?php if (!empty($users->image)): ?>
                            <img src="{{url('img/'.$users->image)}}" class="pf-image" alt="{{$users->image}}">
                            <?php else: ?>
                                <img src="{{asset('img/profile-logo.jpg')}}" class="pf-image" alt="{{$users->image}}">
                          <?php endif; ?>
                      </div>


                      </div>
                    <div class="col-sm-12 col-md-8">
                        <h4><a href="{{url('profile_view/'.$users->id)}}"> <?php echo ucfirst($users->name); ?></a></h4>
                        <!-- Split button -->
                        <div class="row">
                        <div class="col-md-12 col-sm-12 col-xm-12">
                        <i class="fa fa-wrench"></i>
                        &nbsp;
                          {{$users->skill}}
                        </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12 col-sm-12 col-xm-12">
                          <i class="fa fa-map-marker"></i>
                          &nbsp;&nbsp;
                          {{$users->location}}
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div>
</div>
<input type="hidden" name="skill_send" value="<?php echo $_GET['skill'] ?>">

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1RaWWrKsEf2xeBjiZ5hk1gannqeFxMmw&libraries=places"
		async="" defer=""></script>


@endsection
