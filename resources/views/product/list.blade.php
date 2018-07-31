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
<nav class="navbar navbar-light bg-light">
    <div class="col-md-3">
        <a href="" class="navbar-brand float-left"><img src="https://www.how-to-draw-funny-cartoons.com/images/cow-icon-006.png" alt="" style="width: 100px"></a>
        <div class="text-muted mt-4">Trang web bán bò hàng đầu Việt Nam</div>
    </div>
    <div class="col-md-7 form-group">
        <form class="form-inline">
            <input class="form-control mr-sm-2 w-75" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>

</nav>
<div class="container-fluid row mt-3">
    <div class="col-md-3">
        <div class="nav flex-column nav-pills" role="tablist">
            <a class="nav-link active" href="#" role="tab"><i class="fas fa-home mr-2"></i>Trang chủ</a>
            <a class="nav-link" href="/product/list"><i class="fas fa-piggy-bank mr-2"></i>Quản lý bò</a>
            <a class="nav-link" href="/category/list"><i class="fas fa-clipboard-list mr-2"></i>Quản lý danh mục bò</a>
            <a class="nav-link" href="/article/list"><i class="far fa-newspaper mr-2"></i>Quản lý bài viết</a>
        </div>
    </div>
    <div class="col-md-9">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title float-left">Danh sách pò đang bán</h5>
                <a href="/product/create" class="float-right"><i class="far fa-plus-square"></i> Tạo mới pò</a>
                <div class="clearfix"></div>
                <div class="row mt-3 mb-3 ml-1">
                    <form action="" class="form-inline">
                        <div class="form-group">
                            <label class="mr-3">Chủng loại</label>
                            <select name="categoryId" class="form-control mr-3">
                                <option value="0">Tất cả chủng loại</option>
                                {{--@foreach($categories as $item)--}}
                                    {{--<option value="{{$item->id}}" {{$categoryId == $item->id ? 'selected' : ''}}>{{$item->name}}</option>--}}
                                {{--@endforeach--}}
                            </select>
                            <input type="submit" value="Lọc" class="btn btn-outline-success">
                        </div>
                    </form>
                </div>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col" class="w-25">Ảnh</th>
                        <th scope="col">Tên lợn</th>
                        <th scope="col">Chủng loại</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products_in_view as $item)
                        <tr>
                            <th scope="row">{{$item->id}}</th>
                            <td>
                                <div class="card" style="background-image: url('{{$item->image}}'); background-size: cover; width: 77px; height: 60px">
                                </div>
                            </td>
                            <td>{{$item->name}}</td>
                            {{--<td>{{$item->category->name}}</td>--}}
                            <td>{{$item->price}}</td>
                            <td>
                                <a href="/product/{{$item -> id}}/edit">Edit</a>
                                <a href="/product/{{$item -> id}}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="row float-right mr-2">
                    {{--{{$products_in_view->links()}}--}}
                </div>
            </div>
        </div>

    </div>
</div>
</body>
</html>