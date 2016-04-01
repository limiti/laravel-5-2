ID:{{$card->id}};<br/>
TITLE:{{$card->title}}





<form method="POST" action="/cards/{{$card->id}}/update">

    <input name="title" value="{{$card->title}}"/>
    <button type="submit">update</button>

</form>