<ul>
    @if(count($users) > 0)
        @foreach ($users as $user)
            <li>{{ $user->name }}</li>
            <ul>
                @while($user->manager)
                    <li>{{$user->manager->name}}</li>
                    <span style="display: none">{{$user = $user->manager}}</span>
                @endwhile
            </ul>
        @endforeach
    @endif
</ul>
