@extends('layouts.app')

@section('content')
<form  method="post"action="{{url('sendemail')}}" >
<input type="text" name="email">
<input type="submit" name="show" value="send">
</form>
@endsection