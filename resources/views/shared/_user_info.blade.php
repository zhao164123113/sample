<a href="{{ route('users.show', $user->id) }}" style="display: inherit; text-align: center;">
  <img src="{{ $user->gravatar('140') }}" alt="{{ $user->name }}" class="gravatar"/>
</a>
<h1>{{ $user->name }}</h1>