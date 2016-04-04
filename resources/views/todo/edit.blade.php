EDIT:

<form method="POST" action="/todo/{{$todos->id}}/edit/update">

    {{csrf_field()}}
    <input type="hidden"  name="id" value="{{$todos->id}}">
    <input type="text" name="title" value="{{$todos->title}}"/>
    <br/>
    <input type="text" name="body" value="{{$todos->body}}"/>
    <br/>
    <button type="submit">Update</button>
</form>