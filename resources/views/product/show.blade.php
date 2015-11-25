<html>
<head>
    <title>index.blade.php</title>
</head>
<body>
<div>
    <table>
        <th>id</th>
        <th>name</th>
        <th>price</th>

        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
        </tr>

    </table>
</div>
</body>
</html>