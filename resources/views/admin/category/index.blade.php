<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1px">
        <tr>
            <th>Name</th>
            <th>DELETE</th>
            <th>EDIT</th>
        </tr>
        @foreach($categories as $cate)
        <tr>
            <td>{{$cate->name}}</td>
            <td>
                <form action="{{'/admin/'.$cate->id}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-outline-info">DELETE</button>
                </form>
            </td>
            <td>
                <form action="{{'/admin/category/'.$cate->id.'/edit'}}" method="GET">
                    @csrf
                    @method("PATCH")
                    <button type="submit">EDIT</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <form action="/admin/category/create" method="GET">
        @csrf
        <button type="submit">INSERT</button>
    </form>
</body>

</html>