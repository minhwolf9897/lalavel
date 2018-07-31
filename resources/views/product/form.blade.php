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
        </div>
    </div>
    <div class="col-md-9">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title float-left">Thêm mới thông tin bò</h5>
                <a href="/product/list" class="float-right"><i class="fas fa-list-ul"></i> Danh sách bò</a>
                <div class="clearfix"></div>
                <form action="/product" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Tên</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Giá</label>
                        <input type="number" name="price" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Chủng loại</label>
                        <select name="categoryId" class="form-control">
                            @foreach($categories as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Mô tả</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Ảnh đại diện</label>
                        <input type="text" name="image" class="form-control w-75">
                    </div>
                    <div>
                        <input type="submit" value="Lưu thông tin" class="btn btn-primary">
                        <input type="reset" value="Làm lại" class="btn btn-dark">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>