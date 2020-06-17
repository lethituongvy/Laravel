<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html,
        body {
            /* background-image: url('https://hoc360.net/wp-content/uploads/2019/09/2019-09-13_16h11_39.png'); */
            background-size: cover;
            background-repeat: no-repeat;
            height: 100%;
            font-family: 'Numans', sans-serif;
        }

        button {
            background-color: #169916;

        }
    </style>
</head>

<body>

    <center>
        <table border="1px;" height="10px;">
            <tr>
                <th>User</th>
                <th>Password</th>
                <th>Name</th>
                <th>Class</th>
                <th>Role</th>
                <th>DELETE</th>
                <th>EDIT</th>
            </tr>
            @foreach($show as $datas)
            <tr>
                <td>{{$datas -> username}}</td>
                <td>{{$datas -> password}}</td>
                <td>{{$datas -> name}}</td>
                <td>{{$datas -> class}}</td>
                <td>{{$datas -> role}}</td>
                <td>
                    <form action="{{'/admin/users/'.$datas->id}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit">DELETE</button>
                    </form>
                </td>
                <td>
                    <form action="{{'/admin/users/'.$datas->id.'/edit'}}" method="GET">
                        <button type="submit">EDIT</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </center>
</body>

</html>