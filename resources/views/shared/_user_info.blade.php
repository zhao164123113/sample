<a href="{{ route('users.show', $user->id) }}" style="display: inherit; text-align: center;">
  <img src="{{ $user->gravatar('100') }}" alt="{{ $user->name }}" class="gravatar" style="border-radius: 50px" />
</a>
<h1>{{ $user->name }}</h1>