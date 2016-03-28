<h1>One Card</h1>

<span>{{ $card->title }}</span>

@foreach($card->notes as $card)
   <div> {{$card->body}}</div>
@endforeach

<h3>Add NEW: {{$card}}</h3>

<form method="POST" action="/cards/{{$card->card_id}}/notes">
    <textarea name="body" id="body-input" cols="30" rows="10"></textarea>
    <div>
        <button type="submit">Add New Card</button>
    </div>
</form>