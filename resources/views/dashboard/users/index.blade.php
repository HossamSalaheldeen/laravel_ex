<ul>
    @if(count($users) > 0)
        @foreach ($users as $user)
            <li>{{ $user->name }}</li>
            <ul>
                @if(count($user->childStaff))
                    @foreach ($user->childStaff as $childStaff)
                        @include('dashboard.users.sub_staff', ['sub_staff' => $childStaff])
                    @endforeach
                @endif
            </ul>
        @endforeach
    @endif
</ul>
