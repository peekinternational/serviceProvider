@extends('layouts.app')

@section('content')

  <!--     Profile view       -->
    <div class="eo-box">
            <div class="eo-timeline">
                <img src="{{asset('images/builder.jpg')}}" class="eo-timeline-cover">
                 <!--  Cover image  -->
                <input type="file" id="eo-timeline" class="compnay-cover">
                <div class="eo-timeline-toolkit">
                    <label for="eo-timeline"><i class="fa fa-camera"></i> &nbsp;Change</label>
                </div>
            </div>
            <div class="col-md-12">
               <div class="row">
                   <div class="col-md-2 eo-dp-box">      <!--  Profile image  -->
                       <?php if (!empty($user->image)): ?>
                         <img src="{{url('img/'.$user->image)}}" class=" eo-dp eo-c-logo " alt="{{$user->image}}">
                         <?php else: ?>
                             <img src="{{asset('img/profile-logo.jpg')}}" class=" eo-dp eo-c-logo " alt="{{$user->image}}">
                       <?php endif; ?>
                       <div class="eo-dp-toolkit">
                           <input type="file" id="eo-dp" class="compnay-logo">
                           <label for="eo-dp"><i class="fa fa-camera"></i> change</label><br>
                           <label  style="margin-left:-23px" onclick="editcompanypic()"><i class="fa fa-edit"></i> home.Edit</label><br>
                           <label onclick="removecompanypic()"><i class="fa fa-remove">
                             <input type="hidden" value=""id="userID">
                           </i> Remove</label>
                       </div>

                   </div>

                   <div class="col-md-10 eo-timeline-details">
                       <h1><a href="">{{ $user->name }}</a></h1>
                       <div class="col-md-6 eo-section">
                          <a class="btn btn-primary eo-edit-btn" onClick="$('.eo-section').hide(); $('.eo-edit-section').show()"><i class="fa fa-edit"></i> </a>
                           <h4>Basic Information</h4>
                           <div class="eo-details">
                               <span>Skills:</span> {{$user->skill}}
                           </div>
                           <div class="eo-details">
                               <span>Address:</span> {{ $user->address }}, {{$user->city}}, {{$user->country}}
                           </div>
                           <div class="eo-details">
                               <span>Email:</span> {{ $user->email }}
                           </div>
                           <div class="eo-details">
                               <span>Phone:</span> {{ $user->phone }}
                           </div>
                           <div class="eo-details">
                               <span>Experience:</span>{{ $user->experience }}
                           </div>
                           <div class="eo-details">
                              <span>Fee</span> {{$user->fee}}  Rs.
                           </div>
                       </div>
                       <div class="eo-edit-section">
                           <form id="pnj-form" action="{{url('/update/'. $user->id)}}" method="post" class="organization-form">
                                <input type="hidden" name="_token" class="token">
                               <div class="pnj-form-section">
                                   <div class="form-group">
                                       <label class="control-label col-sm-3 col-xs-12">Name</label>
                                       <div class="col-sm-9 pnj-form-field">
                                           <input type="text" class="form-control" name="name" id="companyName" placeholder="Name" value="{{ $user->name }}" required>
                                       </div>
                                   </div>
                                     <div class="form-group">
                                       <label class="control-label col-sm-3 col-xs-12">Skills</label>
                                       <div class="col-sm-9 pnj-form-field">
                                           <select class="form-control select2" name="Skill" required>
                                                <option value="Plumber"> Plumber</option>
                                                <option value="Electrician" >Electrician</option>
                                                <option value="Welder "> Welder</option>
                                                <option value="Painter" >Painter</option>
                                                <option value="Carpenter"> Carpenter</option>
                                                <option value="Auto-Mechanic" >Auto-Mechanic</option>
                                           </select>
                                       </div>
                                   </div>
                                   <div class="form-group">
                                       <label class="control-label col-sm-3 col-xs-12">phone</label>
                                       <div class="col-sm-9 pnj-form-field">
                                           <input type="text" class="form-control" name="phone" placeholder="Phone" value="{{ $user->phone}}" required>
                                       </div>
                                   </div>
                                   <div class="form-group">
                                       <label class="control-label col-sm-3 col-xs-12">Password</label>
                                       <div class="col-sm-9 pnj-form-field">
                                           <input type="password" class="form-control" name="password" placeholder="Password" value="{{ $user->password }}">
                                       </div>
                                   </div>
                                   <div class="form-group">
                                       <label class="control-label col-sm-3 col-xs-12">Email</label>
                                       <div class="col-sm-9 pnj-form-field">
                                           <input type="email" class="form-control " name="email" placeholder="Email" value="{{ $user->email }}">
                                       </div>
                                   </div>
                                   <div class="form-group">
                                       <label class="control-label col-sm-3 col-xs-12">Location</label>
                                       <div class="col-sm-9 pnj-form-field">
                                         <div id="locationField">
                                           <input id="autocomplete" name="location" class="form-control" value="{{$user->location}}" placeholder="Select your location"
                                                  onFocus="geolocate()" type="text"></input>
                                         </div>
                                           </div>
                                   </div>
                                   <div class="form-group">
                                       <label class="control-label col-sm-3 col-xs-12">address</label>
                                       <div class="col-sm-9 pnj-form-field">
                                           <textarea required class="form-control " placeholder="Address" name="address" style="resize: vertical">{{ $user->address }}</textarea>
                                       </div>
                                   </div>
                                   <div class="form-group">
                                       <label class="control-label col-sm-3 col-xs-12">country</label>
                                       <div class="col-sm-9 pnj-form-field">
                                         <input type="text" class="field form-control " name="country"  placeholder="County" value="{{ $user->country }}" required>

                                       </div>
                                   </div>
                                   <div class="form-group">
                                       <label class="control-label col-sm-3 col-xs-12">state</label>
                                       <div class="col-sm-9 pnj-form-field">
                                         <input type="text" class="form-control field" name="state"  placeholder="State" value="{{ $user->state }}" required>

                                       </div>
                                   </div>
                                   <div class="form-group">
                                       <label class="control-label col-sm-3 col-xs-12">city</label>
                                       <div class="col-sm-9 pnj-form-field">
                                         <input type="text" class="form-control field" name="state"  placeholder="City" value="{{ $user->city }}" required>
                                       </div>
                                   </div>
              								   <div class="form-group">
                                     <label class="control-label col-sm-3 col-xs-12">Fee</label>
                                     <div class="col-sm-9 pnj-form-field">
                                         <input type="text" class="form-control" name="fee" placeholder="1000" value="{{ $user->fee }}">
                                     </div>
                                 </div>
                               </div>
                            <div class="form-group">
                                 <label class="control-label col-sm-3 col-xs-12">Experience</label>
                                 <div class="col-sm-9 pnj-form-field">
                                     <input type="text" class="form-control" name="experience" placeholder="2 Years" value="{{ $user->experience }}">
                                 </div>
                             </div>

                                   <div class="col-md-12">
                                       <div class="row">
                                           <div class="col-md-offset-3 col-md-9">
                                               <button type="submit" class="btn btn-primary col-md-3" name="save" style="margin-right:5px">SAVE</button>
                                               <button type="button" class="btn btn-default col-md-3" onClick="$('.eo-edit-section').hide(); $('.eo-section').show()">CANCEL</button>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </form>
                       </div>
                   </div>
               </div>
            </div>
        </div>

@endsection
