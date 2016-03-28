


   @if ($users)
       @foreach($users as $user)
           {{ $user }}
       @endforeach
   @else
       empty
    @endif
