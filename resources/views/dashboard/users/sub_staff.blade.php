<li>{{ $sub_staff->name }}</li>
@if ($sub_staff->staff)
    <ul>
        @if(count($sub_staff->staff) > 0)
            @foreach ($sub_staff->staff as $childStaff)
                @include('dashboard.users.sub_staff', ['sub_staff' => $childStaff])
            @endforeach
        @endif
    </ul>
@endif
