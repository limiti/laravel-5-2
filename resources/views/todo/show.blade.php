<table border="1">
    <tr>
        <td>ID:</td>
        <td>Title:</td>
        <td>Body:</td>
        <td>Create:</td>
    </tr>
    <tr>
        <td>{{$todo->id}}</td>
        <td>{{$todo->title}}</td>
        <td>{{$todo->body}}</td>
        <td>{{$todo->created_at}}</td>
    </tr>
</table>