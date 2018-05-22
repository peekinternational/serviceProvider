@extends('layouts.app')

@section('content')
<div class="col-md-8 col-md-offset-2">
<h1>Welcome to dashboard</h1>
<!-- @if(Session ('ses'))
{{Session('ses')}}
@endif -->
<a href="{{url('/update/'. $user->id)}}" class="btn btn-primary">Edit</a>
</div>
@endsection
