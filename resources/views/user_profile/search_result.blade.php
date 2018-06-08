@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 100px;">
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




<div class="container" style="margin-top: 100px;">
  <h1>Suggested</h1>
    <div class="row">
      @if(count($user1)>0)
      @foreach($user1 as $users)
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


                        <div class="col-md-3">
                        <i class="fa fa-wrench"></i></div>
                        <div class="col-md-9">
                          {{$users->skill}}
                        </div>
                        </div>
                        <div class="row">
                          <div class="col-md-3">
                          <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="col-md-9">
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
@endsection
