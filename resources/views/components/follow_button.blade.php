@unless(auth()->user()->is($user))
<form action="{{route('follow', $user->username)}}" method="post">
    @csrf
    <button type="submit" class="h-full bg-blue-400 rounded-full shadow py-2 px-4 text-white text-sm">
        {{auth()->user()->following($user)? 'Unfollow Me' : 'Follow Me'}}
    </button>
</form>
@endunless
