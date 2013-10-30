@extends('layout.home')

@section('content')
  
  <div class="box">
    <h1>User Profile</h1>
  	<dl class="dl-horizontal">
      <dt>Username</dt>
      <dd>{{ $user->username }}</dd>
      <dt>Email</dt>
      <dd>{{ $user->email }}</dd>
      <dt>Created Date</dt>
      <dd>{{ $user->created_at }}</dd>
    </dl>
    <a href="{{ URL::route('logout') }}">Logout</a>
  </div>

@stop