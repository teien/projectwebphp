<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <style>
        body {
            margin: 0;
        }

        .breadcrumb-cat {
            background: #FAFAFA;
            padding: 10px 0;
        }

        .woocommerce-breadcrumb {
            margin: 0 0 20px;
            font-size: .875rem;
            color: #666;
        }

        .woocommerce-breadcrumb a {
            color: #999;
        }

        .container-big {
            background: #fff;
            width: 100%;
        }

        .screen-reader-text {
            border: 0;
            clip: rect(1px, 1px, 1px, 1px);
            clip-path: inset(50%);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
            word-wrap: normal !important;
        }

        .amount-product {
            margin-left: 10px;
            margin-right: 10px;
            border-radius: 8px;
        }

        .capacity {
            margin-top: 10px;
            margin-bottom: 20px;
            font-size: 18px;

        }

        .option-capacity {
            margin-left: 4px;
            border-radius: 8px;
        }

        .product-price {
            font-size: 22px;
        }

        .gender-wrap {
            font-size: 22px;
        }

        .brand-name {
            font-size: 24px;
        }

        .product-img {
            cursor: zoom-in;
            transition: transform 0.5s ease;
        }

        .nav-item {
            text-decoration: none;
        }

        input[type=checkbox] {
            display: none;
        }

        input[type=checkbox]:checked~label>img {
            transform: scale(1.5);
            cursor: zoom-out;

        }

        .username-input {
            border-radius: 8px;
            width: 100%;
            margin-bottom: 10px;
        }

        .comment-container {
            max-height: 400px;
            overflow-y: auto;
        }

        .comment {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
        }

        .avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .username {
            margin-bottom: 5px;
            font-weight: bold;
        }

        .text {
            margin: 0;
        }
    </style>
</head>

<body>
    @include('includes.header')
    <div class="container-big">
        <div class="breadcrumb-cat">
            <div class="container">
                <nav class="woocommerce-breadcrumb">
                    <a class="nav-item" href="/">Trang chủ</a>
                    <span>/</span>

                    <a class="nav-item" href="#">{{$products->name}}</a>
                </nav>
            </div>

        </div>

        <div class="content-area">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div class="d-flex">
                            <input type="checkbox" id="zoom_img">
                            <label for="zoom_img">

                                <img class="product-img" width="420px" height="420px" src="{{asset($products->img_link)}}" alt="">
                            </label>
                        </div>


                    </div>
                    <div class="col-6">
                        <div class="thanhtoan">

                            <h1 class="product-name">{{$products->name }}</h1>
                            <p class="gender-wrap"> {{$products->sex}}</p>
                            <p class="product-price">{{$products->price}}₫</p>
                            <form action="">
                                <div>
                                    <label class="capacity " for="">Dung tích</label>

                                    <select class="option-capacity col-10" name="" id="">
                                        <option value="">Chọn một tùy chọn</option>
                                        <option value="100ml">100ml</option>
                                    </select>
                                </div>
                                <div class="row">

                                    <input class="col-3 amount-product" type="number" size="3" min="1" title="SL" value="1">


                                    <button type="submit" class="btn btn-dark col-8">Add To Cart</button>


                                </div>

                            </form>


                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="product-description">
                        <h3 class="text-center">Mô Tả </h3>
                        <p>{{$products->content}}</p>
                    </div>
                </div>
                <h2 class="text-center">Comments</h2>
                @if (auth()->check())
                <form action="/comments" method="POST" role="form">
                    @csrf
                    <div class="form-group">
                        <h4>Username</h4>
                        <input class="username-input" type="text" name="username">
                        <textarea name="comments" class="form-control" placeholder="Comment here..." id="" cols="30" rows="3"></textarea>
                        <button type="submit" class="btn btn-dark">Send</button>
                    </div>
                </form>
                @else
                <div class="alert alert-danger">
                    <strong>Chưa đăng nhập</strong> <br>Click tại đây để đăng nhập <a href="/login">Đăng nhập</a>
                </div>


                @endif

                <div class="container py-4">
                    <div class="row">

                        <div class="card">
                            <div class="card-body">

                                <div class="comment-container" id="comment-container">

                                    <div class="comment">
                                        <img src="https://via.placeholder.com/50" alt="Avatar" class="avatar">
                                        <div class="comment-details">
                                            <h6 class="username">Bang Nguyen</h6>
                                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

            </div>

        </div>


        <div class="container">
            <h2 class="text-center">San pham lien quan</h2>
            <div class="row">
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>

                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>

                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>

                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="Letter" class="Letter text-center">
            <h1>Đăng ký thành viên để nhận khuyến mại</h1>
            <p>Theo dõi chúng tôi để nhận thêm nhiều ưu đãi</p>
            <div class="d-flex justify-content-center">
                <input type="text" placeholder="Nhập Mail" />
                <a class="mail-btn">Đăng Ký</a>
            </div>
        </div>

        <div class="Follow d-flex justify-content-center">
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-youtube"></i>
            <i class="fa-brands fa-telegram"></i>
        </div>
    </div>
    @include('includes.footer')
</body>

</html>