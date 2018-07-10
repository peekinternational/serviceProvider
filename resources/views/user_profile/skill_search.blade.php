@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 100px;">
		<div id="map">

  </div>


	<div class="container" id="container">
	    <div class="row" id="show_all">

	    </div>
</div>
</div>
<input type="hidden" name="skill_send" value="<?php echo $_GET['skill'] ?>">

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1RaWWrKsEf2xeBjiZ5hk1gannqeFxMmw&libraries=places"
		async="" defer=""></script>


@endsection
