<?php
namespace App\CustomHelper;
use DB;
use Session;
class JobCallMe{
	public function getUser($userId){
		// $app = \Session::get('u_session')->id;
		$user_data1 = DB::table('ratings')
				->select(DB::raw('avg(rating_value) as rating'))
				->where('rating_provider_id', '=', $userId)->groupBy('rating_provider_id')
				->get();
				return $user_data1;
	}


}

?>
