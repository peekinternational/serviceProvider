<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Register;
use App\Admin;
use App\Contact;
use Mail;
use Carbon;
use DB;
class RegisterController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */

  public function index()
  {
      $user = Register::paginate(8);
      return view('user_profile.people', compact('user'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      //
  }

  public function change_status(Request $request, $token)
  {
    // dd($request->all());
    $token =trim($request->segment(2));
    // dd($token);
    // $token = $request->_token;
    $user['status'] = 'Y';
    $get_token=DB::table('registers')->where('token',$token)->first();
    // dd($get_token);
    if (count($get_token)>0) {
      $getuser=DB::table('registers')->where('token',$token)->update($user);
      return redirect('/login')->with('success','Your account has been verified');
    }else {
      return redirect('/login')->with('red-alert','Your account is not created');

    }

  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */

   // Register User
  public function store(Request $request)
  {
    //dd($request->all());
  $validator =  $this->validate($request,[
      'name' => 'required',
      'phone' => 'required|unique:registers|min:10|max:15',
      'password' => 'required|min:6|confirmed',
      'password_confirmation' => ''
    ]);
      // dd($request->all());
    $email['email'] = $request->input('email');
    $toemail =$email['email'];
    $user = new Register;
    $user->name  = $request->input('name');
    $user->phone  = $request->input('phone');
    $user->password  = md5($request->input('password'));
    $user->email = $request->input('email');
    $user->type = $request->input('type');
    $user->token = $request->_token;

    Mail::send('mail.verify',['token' =>$request->_token,'u_name' =>$request->input('name')],
      function ($message) use ($toemail)
      {
    //
        $message->subject('Service-Provider.com - Account Verifaction');
        $message->from('nabeelirbab@gmail.com', 'E-dehari');
        $message->to($toemail);
      });
      $user->save();
      return redirect('/login')->with('success','Please verify your account');

// echo "successfully";
// exit(1);
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */

   // Show Profile of User on click

  public function show(Request $request, $id)
  {
    // dd($id);
      $user = Register::find($id);
      $session_id= $request->session()->get('u_session')->id;
      $user_data = DB::table('historys')
              ->join('registers', 'historys.provider_id', '=', 'registers.id')
              // ->join('ratings', 'historys.provider_id', '=', 'ratings.rating_provider_id')
              ->where('historys.user_id', '=', $session_id)->groupBy('provider_id')
              ->get()->toArray();
              $user_data_1 =DB::table('ratings')->select('rating_provider_id',DB::raw('Sum(rating_value) as c_value'))->groupBy('rating_value')->get();
              // $user_data_1 =DB::table('ratings')->groupBy('rating_provider_id')->count();

              // dd($user_data_1);
              $user_gallery=DB::table('gallerys')->where('g_provider_id', $id)->get();
              // dd($user_gallery);
              $user_skill_info=DB::table('skills')->get();

      return view('user_profile.view', compact('user','user_data','user_skill_info','user_gallery'));
  }

  public function show_other($id)
  {
    // dd($id);
      $user = Register::find($id);
        $user_gallery=DB::table('gallerys')->where('g_provider_id', $id)->get();
      return view('user_profile.view_other', compact('user', 'user_gallery'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */

   // Edit User
  public function edit($id)
  {
      $user = Register::find($id);
        // $val = $request->session()->get('ses');

      return view('user_profile.update',compact('user'));
      // return view('user_profile.view',compact('user'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */

   // Update User
  public function update(Request $request, $id)
  {
    // return $id;

      // $this->validate($request,[
      //   'skill' => 'required',
      //   'address' => 'required',
      //   'location' => 'required',
      //   'experience' => 'required'
      // ]);

      $id= $request->session()->get('u_session')->id;
      $user_data = DB::table('historys')
              ->join('registers', 'historys.provider_id', '=', 'registers.id')
              ->where('historys.user_id', '=', $id)
              ->get();
      $user_gallery=DB::table('gallerys')->where('g_provider_id', $id)->get();

      $user = Register::find($id);
      // dd($id);
      // return $user;
      $user->name = $request->input('name');
      $user->phone = $request->input('phone');
      $user->password = $request->input('password');
      $user->skill = $request->input('skill');
      $user->location = $request->input('location');
      $user->city = $request->input('city');
      $user->state = $request->input('state');
      $user->country = $request->input('country');
      $user->latitude = $request->input('latitude');
      $user->longitude = $request->input('longitude');
      $user->email = $request->input('email');
      $user->address = $request->input('address');
      $user->fee = $request->input('fee');
      $user->experience = $request->input('experience');
      // $user->image = $request->input('image');

      // dd($user);
      $image = $request->file('image');
      // dd($image);
      if ($image != null) {


      $profilePicture = 'profile-'.time().'-'.rand(000000,999999).'.'.$image->getClientOriginalExtension();
      $destinationPath = public_path('img/profile');
      $image->move($destinationPath, $profilePicture);
  //  dd($profilePicture);
      $user->image=$profilePicture;
      }
      $user->save();

      //dd($user);->save();
      //dd($user->id);
// $request->session()->put('success','Information Updated successfully');
//     session()->flush();
//     session()->forget('success');
     // $success='Information Updated successfully';
     $user_skill_info=DB::table('skills')->get();
      return view('user_profile.view',compact('user','user_data','user_skill_info','user_gallery'));
// exit(1);

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      //
  }

    // Login Function
  public function login(Request $request)
  {
    $phone  = $request->input('phone');
    $password = md5($request->input('password'));
    $user1 = Register::wherephone($phone)->first();

    if (!empty($user1->phone)) {
      if ($phone == $user1->phone) {
        if ($password == $user1->password) {
          // dd($user1);

          $request->session()->put('u_session', $user1);
          $val = $request->session()->get('u_session');

          // $user = DhrUser::find($val->userId);
          // $request->session()->put('ses', $user1->id);
          // $request->session()->put('name', $user1->name);
          // $val = $request->session()->get('ses');
          $id= $request->session()->get('u_session')->id;
          $type= $request->session()->get('u_session')->type;
          $user_data = DB::table('historys')
                  ->join('registers', 'historys.provider_id', '=', 'registers.id')
                  ->where('historys.user_id', '=', $id)
                  ->get();
                  $user_skill_info=DB::table('skills')->get();
            $user_gallery=DB::table('gallerys')->where('g_provider_id', $id)->get();

          $user = Register::find($val->id);
          // $user_info = Register::wheretype($type)
          // return view('user_profile.view', compact('user', 'user_data'));

          if ($type == 'admin') {
            return redirect('/admin/dashboard');
          }else {
            return view('user_profile.view', compact('user', 'user_data','user_skill_info','user_gallery'));
          }
        }else {
          return redirect('/login')->with('red-alert', 'Incorrect Password');
        }
      }
      }else {
        return redirect('/login')->with('red-alert', 'Incorrect Phone');
    }
  }

  // Logout Funciton
   public function logout()
  {
    session()->flush();
    session()->forget('u_session');
    return redirect('/login')->with('success', 'You are successfully logged out');
  }

  // Show Profiles using skills in navbar
   public function profile($skill)
   {
     $user=Register::where('skill','LIKE',"%{$skill}%")->get();
     return view('user_profile.profile_view',compact('user'));
   }


   // Searching from Home Page and Landing Page
  public function search(Request $request)
  {
      $skill = $request->input('skill');
      $location = $request->input('location');
      $city = $request->input('city');

    // $user = Register::all();
    // if($skill !="" && $location ="")$user->where('skill', 'LIKE',"%{$skill}%")->get();

     $all=DB::table('registers');
     if($skill != "")$all->where('skill',$skill);
     if($location != "")$all->where('location',$location);
     $user=$all->get();

     $alls=DB::table('registers');
     if($city != "")$alls->where('city',$city);
     // if($skill != "")$alls->where('skill',$skill);
     $user1=$alls->get();
     //dd($user);

      // $user = Register::where('skill','LIKE',"%{$skill}%")->get();

      // $user = Register::where('skill','LIKE',"%{$skill}%")->Where('location', 'LIKE',"%{$location}%")->get();
      // $user1 = Register::where('skill','LIKE',"%{$skill}%")->Where('city', 'LIKE',"%{$city}%")->get();

      // return view('user_profile.search_result',compact('user', 'user1'));
      return view('user_profile.search_result',compact('user','user1'));
  }

  //  Searching through skill but not in use
public function showdata($skill)
{
  $user= Register::where('skill','LIKE',"%{$skill}%")->get();
  // $user1 = Register::where('skill','LIKE',"%{$skill}%")->Where('city', 'LIKE',"%{$city}%")->get();
return view('user_profile.skill_search',compact('user'));
}

// No Use
public function updateProfile(Request $request)
{
  print_r($request->input());
}

// Image Upload function calling through ajax
public function imageUpload(Request $request,$id)
{

  $user = Register::find($id);
  $image = $request->file('profile-image');

  $profilePicture = 'profile-'.time().'-'.rand(000000,999999).'.'.$image->getClientOriginalExtension();
  $destinationPath = public_path('img/profile');
  $image->move($destinationPath, $profilePicture);
//  dd($profilePicture);
  $user->image=$profilePicture;

  $user->save();
  echo $profilePicture;
}

// Cover Upload function calling through ajax
public function coverUpload(Request $request, $id)
{
  $user = Register::find($id);
  $image = $request->file('cover_image');

  $coverPicture = 'cover-'.time().'-'.rand(000000,999999).'.'.$image->getClientOriginalExtension();
  $destinationPath = public_path('img/cover');
  $image->move($destinationPath, $coverPicture);
  $user->cover_img = $coverPicture;

  $user->save();
  echo $coverPicture;
}

// Cover Upload function calling through ajax
public function gallery_imageUpload(Request $request)
{
  $id= $request->session()->get('u_session')->id;
  // dd($id);
  $nameinfo['g_provider_id'] = $id;
  // $nameinfo['g_image'] = $request->get('gal_image');



  $image = $request->file('gal_image');

  $coverPicture = 'gallery-'.time().'-'.rand(000000,999999).'.'.$image->getClientOriginalExtension();
  $destinationPath = public_path('img/gallery');
  $image->move($destinationPath, $coverPicture);
  $nameinfo['g_image'] = $coverPicture;

  $user_info=DB::table('gallerys')->insert($nameinfo);
  echo $coverPicture;
}

//  Searching in radius calling from map_script through ajax
public function searchProviders(Request $request)
  {
  //  return $request->lati.' '.$request->longitude;

    $latitude = $request->latitude;
    $longitude = $request->longitude;
    $km = $request->km;
    $skill = $request->skill;

    again:
      $distan=$km*111;

    $order1 = Register::selectRaw("*,
                ( 6371 * acos( cos( radians(" . $latitude . ") ) *
                cos( radians(latitude) ) *
                cos( radians(longitude) - radians(" . $longitude . ") ) +
                sin( radians(" . $latitude . ") )*sin( radians(latitude) ) ) ) AS distan")->orderBy("distan", 'asc')->get();

    if (empty($skill)) {
    $providers=$order1->where('distan','<=',$distan);
    // $providers=$order1;
    }
    else {
      $providers = Register::where('skill','LIKE',"%{$skill}%")->whereBetween('latitude',[$latitude-$km, $latitude+$km])->whereBetween('longitude',[$longitude-$km, $longitude+$km])->orderBy('latitude','asc')->get();
      // $providers = $order1->where('skill','LIKE',"%{$skill}%")->where('distan','<=',$distan);
    }

    if (count($providers)==0) {
      if ($km > 2.7027) {
        echo "not found";
      }else{
        $km=$km*2;
        // echo $km; die();
         goto again;
      }

    }else {
      $obj = array(
        "km" => $km,
        "provider"=> $providers
        // "order"=> $order
      );
      //dd($obj);
       echo json_encode($obj);
    }
  }


 public function changePassword(Request $request, $id)
 {
  $oldpassword=$request->get('oldPassword');
    $user = Register::find($id);
    if($user->password==$oldpassword){
  $user->password= $request->get('newPassword');
    $user->save();
  return back()->with('success','Your password has been changed');
    }
    else{
      return back()->with('red-alert','Enter Correct old password');
    }
 }

  // Contact Us function calling through ajax
  public function contact(Request $request)
  {
    $name = $request->get('name');
    $email = $request->get('email');
    $message = $request->get('message');

    $user = new Contact;
    $user->name = $name;
    $user->email = $email;
    $user->message = $message;


    $user->save();
    echo "successfully";
  }
  public function contactUpdate(Request $req, $id)
  {
    return 112;
  }


  public function user_hire(Request $request, $id)
  {
    // if($request->session()->has('u_session')){
    // $userinfo= $request->session()->get('u_session')->userId;
      $nameinfo['user_id']= $request->session()->get('u_session')->id;
      $nameinfo['provider_id'] = $request->id;
      // dd($nameinfo['user_id']);
      $mytime = Carbon\Carbon::now();
      $mytime->toDateTimeString();
      $nameinfo['created_at'] = $mytime;
      $nameinfo['updated_at'] = $mytime;
      // dd($nameinfo['created_at']);
      $user_info=DB::table('historys')->insert($nameinfo);
      // dd($user_info);

      // $user_get=DB::table('registers')->where('id',$id)->first();
      return redirect('/')->with('success', 'you have hire a provider');
    // }else {
    //   return redirect('/accounts/login');
    // }

  }




  public function show_provider(Request $request)
  {
    // if($request->session()->has('u_session')){
    $id= $request->session()->get('u_session')->id;
    // dd($id);
    $user_data = DB::table('historys')
            ->join('registers', 'historys.provider_id', '=', 'registers.id')
            ->where('historys.user_id', '=', $id)
            ->get();
            // dd($users);
      // return view('user_profile.profile_view', compact('user_data'));
    // }else {
    //   return redirect('/accounts/login');
    // }

  }

  public function user_rating(Request $request)
  {
    // $userinfo= $request->session()->get('u_session')->userId;
    // dd($request->all());
      $id= $request->session()->get('u_session')->id;
      $nameinfo['rating_user_id']= $request->session()->get('u_session')->id;
      $nameinfo['rating_provider_id'] = $request->get('provider_id');
      $nameinfo['rating_value'] = $request->get('rating');
      // dd($nameinfo['value']);
      $user_info=DB::table('ratings')->insert($nameinfo);
      // dd($user_info);

      // $user_get=DB::table('registers')->where('id',$id)->first();
      // echo $user_info;
      if($user_info == 1){
        echo "1";
      }else {
        echo "0";
      }


  }

}
