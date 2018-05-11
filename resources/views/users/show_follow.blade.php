@extends('layouts.default')
@section('title', $title)

@section('content')
<div class="col-md-offset-2 col-md-8">
  <h1>{{ $title }}</h1>
  <ul class="users">
    @foreach ($users as $user)
      <li>
        <img src="{{ $user->gravatar() }}" alt="{{ $user->name }}" class="gravatar" style="width: 80px; height: 80px; border-radius: 40px" />
        <a href="{{ route('users.show', $user->id )}}" class="username">{{ $user->name }}</a>
      </li>
    @endforeach
  </ul>

  {!! $users->render() !!}
</div>
@stop