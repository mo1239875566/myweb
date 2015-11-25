
<html>
<head>
    <title>this is my web</title>
    <style>
        .header{
            background-color:darkred;
        }
        .container{
            background-color: deepskyblue;
        }
        .footer{
            background-color: greenyellow;
        }
    </style>
</head>
<body>
<div class=" header">
    <ul>
        <li>首页</li>
        <li>产品</li>
        <li>帮助</li>
    </ul>
</div>

<div class="container">
    <table><tr>
            <th>id</th>
            <th>name</th>
            <th>price</th>
            <th>operation</th>
        </tr>
        @foreach($products as $p)
        <tr>
            <td>{{$p->id}}</td>
            <td>{{$p->name}}</td>
            <td>{{$p->price}}</td>
            <td><a href="/product/show/{{$p->id}}">Show</a></td>
            <td><a href="/product/edit/{{$p->id}}">Edit</a></td>
            <td><a href="/product/delete/{{$p->id}}">Delete</a> </td>
        </tr>
        @endforeach
    </table>
    <a href="/products">Create</a>
</div>
<hr/>
<div class="footer">
    abc @ 2015-2025
</div>
</body>
</html>