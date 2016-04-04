
<h1><span>TODO</span></h1>
<form method="post" action="/todo/create">
    {{csrf_field()}}
    <div><input type="text" name="title" /> Title</div>
    <hr/>
    <div><input type="text" name="body" /> Content</div>
    <hr/>
    <div><button type="submit">Todo</button> Add new todo</div>
    <hr/>
</form>


