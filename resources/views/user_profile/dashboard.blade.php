@extends('layouts.app')

@section('content')
<h1>Welcome to dashboard</h1>
<!-- @if(Session ('ses'))
{{Session('ses')}}
@endif -->
<a href="{{url('/update/'. $user->id)}}" class="btn btn-primary">Edit</a>
@endsection
