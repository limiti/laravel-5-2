<h1>All Cards</h1>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
@foreach($cards as $card)
   <div><a href="/cards/{{$card->id }}"> {{ $card->title }}</a></div>
@endforeach