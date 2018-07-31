<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <title>Admin trang bán bò lớn nhất VN</title>
</head>
<body>
<h1 id="hat1" title="Đây là tiêu đề của h1.">Danh sách chủng loại pò</h1>
<ul>
    @foreach($list_obj as $item)
        <li>
            {{$item -> name}}
            <img src="{{$item -> image}}" alt="" style="width: 150px">
            <a href="/category/edit/{{$item -> id}}">Edit</a>
            <a href="#/category/destroy/{{$item -> id}}" id="{{$item -> id}}" class="delete-link">Delete</a>
        </li>
    @endforeach
</ul>
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>--}}
<script>
    var deleteLinks = document.getElementsByClassName("delete-link");
    for (var i = 0; i < deleteLinks.length; i++) {
        deleteLinks[i].onclick = function () {
            var choice = confirm("Bạn có chắc muốn xoá sản phẩm này không?");
            if(choice){
                var id = this.id;
                var xhttp = new XMLHttpRequest();
                var data = "_token={{csrf_token()}}";
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        // Typical action to be performed when the document is ready:
                        alert(JSON.parse(this.responseText).message);
                        window.location.reload();
                    }
                };
                xhttp.open("POST", "http://localhost:8000/category/destroy/" + id, true);
                xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhttp.send(data);
            }
        };
    }
</script>

</body>
</html>