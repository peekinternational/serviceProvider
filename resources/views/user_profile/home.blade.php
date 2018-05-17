@extends('layouts.app')

@section('content')
<h1>Service Providers</h1>
@if(count($user)>0)
<table class="table table-striped" border="1px solid gray">
  <tr><th>Name</th><th>Phone</th><th>Skill</th> </tr>
@foreach($user as $users)
<tr><td><a href="{{url('profile_view/'.$users->id)}}"> {{$users->name}}</a></td>
<td>{{$users->phone}}</td>
 <td>{{$users->skill}}</td></tr>
@endforeach
</table>
@endif
@endsection
