@extends('layouts.app')

@section('content')
<?php
$rating_val='';
?>
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
                            <img src="{{url('img/profile/'.$users->image)}}" class="pf-image" alt="{{$users->image}}">
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
                            <?php $rating_val=round($users->rating); ?>
                                @if($rating_val ==1)
                                  <i class="fa fa-star"></i><i class="fa fa-star-o"></i></i><i class="fa fa-star-o"></i></i><i class="fa fa-star-o"></i></i><i class="fa fa-star-o"></i><br>
                                  @elseif($rating_val == 2)
                                  <i class="fa fa-star"></i><i class="fa fa-star"></i></i><i class="fa fa-star-o"></i></i><i class="fa fa-star-o"></i></i><i class="fa fa-star-o"></i><br>
                                  @elseif($rating_val == 3)
                                  <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></i><i class="fa fa-star-o"></i></i><br>
                                  @elseif($rating_val == 4)
                                  <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></i><i class="fa fa-star-o"></i><br>
                                  @elseif($rating_val == 5)
                                  <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><br>
                                  @else
                                  <i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><br>
                                  @endif
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
                      <div class="row">
                          <div class="col-md-12 col-sm-12 col-xm-12">
                          <i class="fa fa-phone"></i>
                          &nbsp;&nbsp;
                          {{$users->phone}}
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

<!-- Suggeted data close to your search -->
<div class="container">
  <!-- <h4>Not Found in Your Area</h4> -->
  <h1 align="center">Suggested</h1>
    <div class="row">
      @if(count($user1)>0)
      @foreach($user1 as $users)
        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 profile_card">
            <div class="well well-sm">
                <div class="row">

                    <div class="col-sm-12 text-center">
                      <div class="profile-show">
                          <?php if (!empty($users->image)): ?>
                            <a href="{{url('profile_view/'.$users->id)}}"><img src="{{url('img/profile/'.$users->image)}}" class="pf-image" alt="{{$users->image}}"></a>
                            <?php else: ?>
                                <a href="{{url('profile_view/'.$users->id)}}"><img src="{{asset('img/profile-logo.jpg')}}" class="pf-image" alt="{{$users->image}}"></a>
                          <?php endif; ?>
                      </div>


                      </div>
                    <div class="col-sm-12 col-md-8">
                        <h4><a href="{{url('profile_view/'.$users->id)}}"> <?php echo ucfirst($users->name); ?></a></h4>
                        <!-- Split button -->
                        <div class="row">

                        <div class="col-md-12 col-sm-12 col-xm-12">
                          <?php $rating_val=round($users->rating); ?>
                              @if($rating_val ==1)
                                <i class="fa fa-star"></i><i class="fa fa-star-o"></i></i><i class="fa fa-star-o"></i></i><i class="fa fa-star-o"></i></i><i class="fa fa-star-o"></i><br>
                                @elseif($rating_val == 2)
                                <i class="fa fa-star"></i><i class="fa fa-star"></i></i><i class="fa fa-star-o"></i></i><i class="fa fa-star-o"></i></i><i class="fa fa-star-o"></i><br>
                                @elseif($rating_val == 3)
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></i><i class="fa fa-star-o"></i></i><br>
                                @elseif($rating_val == 4)
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></i><i class="fa fa-star-o"></i><br>
                                @elseif($rating_val == 5)
                                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><br>
                                @else
                                <i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><br>
                                @endif
                        <i class="fa fa-wrench"></i>
                        &nbsp;

                          {{$users->skill}}

                        </div>
                      </div>
                        <div class="row">
                          <div class="col-md-12 col-sm-12 col-xm-12">
                          <i class="fa fa fa-phone"></i>
                          &nbsp; 
                         <span style="color: green;"> {{$users->phone}}</span>
                        </div>
                      </div>
                        <div class="row">
                          <div class="col-md-12 col-sm-12 col-xm-12">
                          <i class="fa fa-map-marker"></i>
                          &nbsp;
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
