<html>
<head>
    <title>edit.php</title>
</head>
<body>
<div>
    <form action="/product/save/{{['id']}}">
        id:<input  name ="id" value="/$product{{['id']}}" /> <br>
        name:<input  name ="name" value="/$product{{['name']}}" /> <br>
        price:<input  name ="price" value="/$product{{['price']}}" /> <br>
        <input  type="submit" value="保存" />
    </form>
</div>
</body>
</html>