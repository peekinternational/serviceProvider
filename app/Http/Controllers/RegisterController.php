<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Register;
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
    $this->validate($request,[
      'name' => 'required',
      'phone' => 'required',
      'password' => 'required'
    ]);

    $user = new Register([
    'name'  => $request->input('name'),
      'phone' => $request->input('phone'),
      'password' => $request->input('password')
    ]);
  $user->save();
echo "successfully";
// exit(1);
    // return redirect('/login')->with('success', 'You are successfully registered');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
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

      $this->validate($request,[
        'skill' => 'required',
        'address' => 'required',
        'location' => 'required',
        'experience' => 'required'
      ]);

      $user = Register::find($id);
      // dd($user);
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
    $user = Register::wherephone($phone)->first();

    if (!empty($user->phone)) {
      if ($phone == $user->phone) {
        if ($password == $user->password) {
          $request->session()->put('ses', $user->id);
          $request->session()->put('name', $user->name);
          $val = $request->session()->get('ses');

          // return redirect('/dashboard')->with('success','You are successfully logged in');
          // return view('user_profile.home',compact('user'));
          return redirect('/')->with('success', 'You are successfully logged in');

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
     if($skill != "")$alls->where('skill',$skill);
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
  $destinationPath = public_path('img');
  $image->move($destinationPath, $coverPicture);
  $user->cover_img = $coverPicture;

  $user->save();
  echo $coverPicture;
}
}
