ID:{{$card->id}};<br/>
TITLE:{{$card->title}}





<form method="POST" action="/cards/{{$card->id}}/update">
    {{ csrf_field() }}

    <input name="title" value="{{$card->title}}"/>
    <button type="submit">update</button>


</form>

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif