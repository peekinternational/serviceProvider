<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Register;
use App\Contact;
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

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    //dd($request->all());
  $validator =  $this->validate($request,[
      'name' => 'required',
      'phone' => 'required|unique:registers|min:10|max:15',
      'password' => 'required|min:6|confirmed',
      'password_confirmation' => ''
    ]);
    $user = new Register;
    $user->name  = $request->input('name');
    $user->phone  = $request->input('phone');
    $user->password  = $request->input('password');
    $phone = $request->input('phone');

      $user->save();
      return redirect('/login')->with('success','You are successfully Registered');

// echo "successfully";
// exit(1);
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    // dd($id);
      $user = Register::find($id);
      return view('user_profile.view', compact('user'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
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
  public function update(Request $request, $id)
  {
    // return $id;

      // $this->validate($request,[
      //   'skill' => 'required',
      //   'address' => 'required',
      //   'location' => 'required',
      //   'experience' => 'required'
      // ]);


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
      $destinationPath = public_path('img');
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
      return view('user_profile.view',compact('user'));
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


  public function login(Request $request)
  {
    $phone  = $request->input('phone');
    $password = $request->input('password');
    $user1 = Register::wherephone($phone)->first();

    if (!empty($user1->phone)) {
      if ($phone == $user1->phone) {
        if ($password == $user1->password) {
          $request->session()->put('ses', $user1->id);
          $request->session()->put('name', $user1->name);
          $val = $request->session()->get('ses');

          $user = Register::find($val);
          return view('user_profile.view', compact('user'));

        }else {
          return redirect('/login')->with('red-alert', 'Incorrect Password');
        }
      }
      }else {
        return redirect('/login')->with('red-alert', 'Incorrect Phone');
    }
  }
   public function logout()
  {
    session()->flush();
    session()->forget('ses');
    return redirect('/login')->with('success', 'You are successfully logged out');
  }
   public function profile($skill)
   {
     $user=Register::where('skill','LIKE',"%{$skill}%")->get();
     return view('user_profile.profile_view',compact('user'));
   }

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
public function showdata($skill)
{
  $user= Register::where('skill','LIKE',"%{$skill}%")->get();
  // $user1 = Register::where('skill','LIKE',"%{$skill}%")->Where('city', 'LIKE',"%{$city}%")->get();
return view('user_profile.skill_search',compact('user'));
}
public function updateProfile(Request $request)
{
  print_r($request->input());
}
public function imageUpload(Request $request,$id)
{

  $user = Register::find($id);
  $image = $request->file('profile-image');

  $profilePicture = 'profile-'.time().'-'.rand(000000,999999).'.'.$image->getClientOriginalExtension();
  $destinationPath = public_path('img');
  $image->move($destinationPath, $profilePicture);
//  dd($profilePicture);
  $user->image=$profilePicture;

  $user->save();
  echo $profilePicture;
}
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
       echo json_encode($obj);
    }
  }
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


}
