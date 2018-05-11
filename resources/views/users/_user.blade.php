<li>
<div style="float: left">
<img src="{{ $user->gravatar() }}" alt="{{ $user->name }}" class="gravatar" style="width: 80px; height: 80px; border-radius: 40px;" />
<a href="{{ route('users.show', $user->id) }}" class="username">{{ $user->name }}</a>
</div>

@can('destroy', $user)
    <form action="{{ route('users.destroy', $user->id) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button type="submit" class="btn btn-sm btn-danger delete-btn">删除</button>
    </form>
@endcan
</li>