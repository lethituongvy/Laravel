<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html,
        body {
            /* background-image: url('https://i.pinimg.com/736x/e0/fa/84/e0fa84017712e6acb5a32a05029ca1e2.jpg'); */
            background-size: cover;
            background-repeat: no-repeat;
            height: 100%;
            font-family: 'Numans', sans-serif;
        }
        button{
            background-color: #169999;
            
        }
        img{
            width:50px;
        }
    </style>
</head>

<body>
    <center>
        <table border="1px;" height="10px;">
            <tr>
                <th>Name</th>
                <th>Desciption</th>
                <th>Price</th>
                <th>Image</th>
                <th>DELETE</th>
                <th>EDIT</th>
            </tr>
            @foreach($display as $data)
            <tr>
                <td>{{$data -> title}}</td>
                <td>{{$data -> description}}</td>
                <td>{{$data -> price}}</td>
                <td><img src="{{'/storage/'. $data->image }}" alt=""></td>
                <td>
                    <form action="{{'/admin/'.$data->id}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit">DELETE</button>
                    </form>
                </td>
                <td>
                    <form action="{{'/admin/animals/'.$data->id.'/edit'}}" method="GET">
                        <button type="submit">EDIT</button>
                    </form>
                </td>

            </tr>
            @endforeach
        </table>
    </center>
    <center>
        <form action="/admin/animals/create" method="GET">
            @csrf
            <button type="submit">INSERT</button>
        </form>
    </center>

</body>

</html>