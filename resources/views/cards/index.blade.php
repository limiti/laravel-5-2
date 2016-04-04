<h1>All Cards</h1>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
@foreach($cards as $card)
   <hr/>
   <div><a href="/cards/{{$card->id }}"> {{ $card->title }}</a></div>
   <p>{{$card->user_id}}</p>
   @foreach($card->notes as $note)
      <div style="margin-left:25px; background: #555 "> {{$note->body}}</div>
      @endforeach
   <div><a href="/cards/{{$card->id}}/edit">Edit Card</a></div>

@endforeach