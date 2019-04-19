<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DhrUser;
use App\Models\Worker;
use App\Models\UserInfo;
// use App\Models\Service;
use Mail;
use Carbon;
use DB;
use App\Register;
use App\Contact;
class Admin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function show_user(Request $request)
     {
       if($request->session()->has('u_session')){
       $user_get=Register::all();
       // dd($user_get);
       return view('admin.admin_account.user',compact('user_get'));
     }else {

       return redirect('/login');
     }
     }

     public function show_work(Request $request)
     {
       if($request->session()->has('u_session')){
       $user_get=DB::table('work_history')
           ->leftJoin('registers', 'registers.id', '=', 'work_history.user_id')
           // ->leftJoin('registers', 'registers.id', '=', 'work_history.provider_id')
           // ->where('','=','work_history.provider_id')
           ->select('registers.*','work_history.*')
           ->get();
       // dd($user_get);
       return view('admin.admin_account.work_schedule',compact('user_get'));
     }else {

       return redirect('/login');
     }
     }


     public function show_categories(Request $request)
     {
       if($request->session()->has('u_session')){
       $user_get=DB::table('skills')->get();
       return view('admin.admin_account.categories',compact('user_get'));
     }else {

       return redirect('/login');
     }
   }



     public function admin_table_route(Request $request)
     {
       if($request->session()->has('u_session')){
       return view('admin.admin_account.table');
     }else {

       return redirect('/login');
     }
   }


     public function admin_notification_route(Request $request)
     {
       if($request->session()->has('u_session')){
       return view('admin.admin_account.notification');
     }else {

       return redirect('/accounts/login');
     }
   }



     public function admin_dashboard_route(Request $request)
     {
       if($request->session()->has('u_session')){
       // $user_get=DhrUser::get()->count();
       // $active_user=DB::table('dhr_users')->where('active_status','1')->count();
       // $social_users=DB::table('dhr_users')->select('country',DB::raw('COUNT(userId) as count'))->groupBy('country')->get();
       // dd(count($social_users));
       // $social_users_data=DB::table('registers')->get();
       // $social_users1=count($social_users_data);


       // dd($social_users1);
       // return view('admin.admin_account.dashboard',compact('user_get','active_user', 'social_users','social_users1'));
       return view('admin.admin_account.dashboard');
     }else {

       return redirect('/login');
     }
   }


     public function admin_add_category_route(Request $request)
     {
       if($request->session()->has('u_session')){
       return view('admin.admin_account.add_category');
     }else {

       return redirect('/login');
     }
   }

     public function admin_edit_route(Request $request, $id)
     {

       if($request->session()->has('u_session')){
         // $userinfo= $request->session()->get('u_session')->userId;
         // dd($userinfo);
         $user_get=DB::table('registers')->where('id',$id)->first();
         return view('admin.admin_account.editUser',compact('user_get'));
       }else {
         return redirect('/login');
       }

     }


     public function admin_editCategory_route(Request $request, $id)
     {

       if($request->session()->has('u_session')){
         $userinfo= $request->session()->get('u_session')->userId;
         // dd($userinfo);
         $user_get=DB::table('skills')->where('skill_id',$id)->first();
         return view('admin.admin_account.editCategory',compact('user_get'));
       }else {
         return redirect('/login');
       }

     }



     public function admin_create_route(Request $request)
     {

       if($request->session()->has('u_session')){
         // $userinfo= $request->session()->get('u_session')->userId;
         return view('admin.admin_account.create_user');
       }else {
         return redirect('/login');
       }

     }



     public function admin_edit_user(Request $request)
     {
       $validator =  $this->validate($request,[
     'name' => 'required',
     'phone' => 'required|min:10|max:15'
   ]);
      // dd($request->all());
         $userinfo= $request->session()->get('u_session');
       $wid = $request->input('id');
       // dd($wid);
       $nameinfo['name'] = $request->input('name');
       // dd($nameinfo['f_name']);
       $nameinfo['phone'] = $request->input('phone');
       $nameinfo['email'] = $request->input('email');
       $nameinfo['skill'] = $request->input('skill');
       $mytime = Carbon\Carbon::now();
       $mytime->toDateTimeString();
       // dd($mytime);
       $nameinfo['updated_at'] = $mytime;

       // dd($nameinfo['email']);
       // ->f_userId = $userinfo->userId;
       // $user->image =  $request->file('w_image');
       if ($wid) {
         // echo $wid;
         // $user = new Worker;

     $user_info=DB::table('registers')->where('id',$wid)->update($nameinfo);
       // $worker =  $user->update();
       if ($user_info == true) {
         echo "1";
       }else {
         echo "0";
       }

       }

       else {
         // $nameinfo['f_userId']=$userinfo->userId;
         $nameinfo['token'] = $request->_token;
         // dd($nameinfo['token']);
         $nameinfo['type'] = $request->input('type');
         // $ip= \Request::ip();
         // dd($ip);
         // $data = \Location::get($ip);
         // dd($data->countryCode);
         // $nameinfo['country'] = $data->countryCode;
         $nameinfo['created_at'] = $mytime;
         $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $charactersLength = strlen($characters);
      $randomString = '';
      for ($i = 0; $i < 6; $i++) {
          $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
       //echo $randomString;
       $nameinfo['password'] = md5($randomString);
      // dd($random);
       $user_info=DB::table('registers')->insert($nameinfo);
       Mail::send('mail.sendmail',['u_name' =>$request->input('name'), 'u_email' =>$request->input('email'),'u_phone' =>$request->input('phone'),'token' =>$request->_token,'u_password' =>$randomString],
       function ($message) use ($nameinfo)
       {

         $message->subject('Service-Provider.com - Account Sign in');
         $message->from('nabeelirbab@gmail.com', 'E-dehari');
         $message->to($nameinfo['email']);
       });
       if ($user_info == true) {
         echo "1";
       }else {
         echo "0";
       }
       }

       // dd($worker);

     }


     public function admin_edit_category(Request $request)
     {
   //     $validator =  $this->validate($request,[
   //   'skill_name' => 'required'
   // ]);
      // dd($request->all());
         $userinfo= $request->session()->get('u_session');
       $sid = $request->input('id');
       $profilePicture="";
       // dd($wid);
       $nameinfo['skill_name'] = $request->input('skill_name');
       $image = $request->file('image');
       // dd($nameinfo['f_name']);
       if ($image !="") {
         $profilePicture = 'category-'.time().'-'.rand(000000,999999).'.'.$image->getClientOriginalExtension();

         $destinationPath = public_path('images/skill_images');
         $image->move($destinationPath, $profilePicture);
        // dd($profilePicture);
         $nameinfo['skill_image']=$profilePicture;

       }
       if ($sid) {

     $user_info=DB::table('skills')->where('skill_id',$sid)->update($nameinfo);
       // $worker =  $user->update();
       if ($user_info == true) {
         if ($profilePicture !="") {
           echo $profilePicture;
         }else {
           echo "1";
         }

       }else {
         echo "0";
       }

       }

       else {
         // $nameinfo['type'] = $request->input('type');
       $user_info=DB::table('skills')->insert($nameinfo);

       if ($user_info == true) {
         echo "1";
       }else {
         echo "0";
       }
       }

       // dd($worker);

     }


     public function change_status_admin(Request $request, $token)
     {
       $token =trim($request->segment(2));
       // dd($token);
       // $token = $request->_token;
       $user['status'] = 'Y';
       $get_token=DB::table('registers')->where('token',$token)->first();

       if (count($get_token)>0) {
         $getuser=DB::table('registers')->where('token',$token)->update($user);
         return redirect('/login')->with('success','Your account has been verified');
       }else {
         return redirect('/login')->with('red-alert','Your account is not created');

       }

     }


     public function admin_delete_user(Request $request, $id)
     {
        if($request->session()->has('u_session')){
         // dd($id);
         $user_get=DB::table('registers')->where('id',$id)->delete();
        // dd($user_get);
        echo $user_get;
      }else {

          return redirect('/login');
        }
       }
     public function admin_delete_category(Request $request, $id)
     {
         // dd($id);
         if($request->session()->has('u_session')){
         $user_get=DB::table('skills')->where('skill_id',$id)->delete();
        // dd($user_get);
        echo $user_get;
      }else {

          return redirect('/login');
        }
       }


       public function create_category(Request $request)
       {
            dd($request->all());
           $nameinfo['skill_name']=$request->input('skill_name');
           // dd($nameinfo['skill_name']);
          $image = $request->file('skill_image');
          // dd($image);
          if ($image !="") {
          $profilePicture = 'category-'.time().'-'.rand(000000,999999).'.'.$image->getClientOriginalExtension();
          $destinationPath = public_path('images/skill_images/');
          $image->move($destinationPath, $profilePicture);
        //  dd($profilePicture);
          $nameinfo['skill_image']=$profilePicture;
        }
        $user_info=DB::table('skills')->insert($nameinfo);

        if ($user_info == true) {
          echo "1";
        }else {
          echo "0";
        }

       }





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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
}
