<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styleProduct.css') }}">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</head>

<body>
    @include('includes.header')
    <div class="container">
        <div class="d-flex justify-content-center m-5">
            <h1>Shop</h1>
        </div>
        <div class="container">
            <p class="" style="
                                color: #565656;
                                font-size: 15px;
                                background-color: #fafafa;
                                padding: 10px;
                                margin-bottom: 50px;
                              ">
                <a style="text-decoration: none; color: #565656" href="/">Trang chủ</a> /
                <a style="text-decoration: none; color: #565656">Shop</a>
            </p>
        </div>

        <div class="d-flex flex-wrap col-12  ">
            <div class="col-2">
                <div class="">
                    <h3>
                        Thương hiệu
                    </h3>
                    <div>
                        <br>
                        <div>
                            <form action="{{ route('search') }}" method="GET">
                                <input style="border-top: none;
                                                border-left: none;
                                                border-right: none;
                                                border-bottom: 1px solid #b1b1b1;
                                                outline: none;
                                                " class="ipsearch" type="text" class="uk-input" name="search" placeholder="Bạn cần tìm ..." title="Type in a name">
                                <button class="btsearch" type="submit">Tìm kiếm</button>
                            </form>
                            <div class="list-cat">
                                <table id="">
                                    <tbody>
                                        <tr>
                                            <td> <a href="{{ route('products.filter', ['catalog' => 1]) }}" class="">Creed</a> </td>
                                        </tr>
                                        <tr>
                                            <td> <a href="{{ route('products.filter', ['catalog' => 2]) }}" class="">Tom Ford</a> </td>
                                        </tr>
                                        <tr>
                                            <td> <a href="{{ route('products.filter', ['catalog' => 3]) }}" class="">Dior</a> </td>
                                        </tr>
                                        <tr>
                                            <td> <a href="{{ route('products.filter', ['catalog' => 4]) }}" class="">By Kilian</a> </td>
                                        </tr>
                                        <tr>
                                            <td> <a href="{{ route('products.filter', ['catalog' => 5]) }}" class="">Hermès</a> </td>
                                        </tr>
                                        <tr>
                                            <td> <a href="{{ route('products.filter', ['catalog' => 6]) }}" class="">Versace</a> </td>
                                        </tr>
                                        <tr>
                                            <td> <a href="{{ route('products.filter', ['catalog' => 7]) }}" class="">Clive Christian</a> </td>
                                        </tr>
                                        <tr>
                                            <td> <a href="{{ route('products.filter', ['catalog' => 8]) }}" class="">Dolce Cabbana</a> </td>
                                        </tr>
                                        <tr>
                                            <td> <a href="{{ route('products.filter', ['catalog' => 9]) }}" class="">Jean Paul Gaultier</a> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="">
                            <div class="">
                                <div class="">
                                    <form class="" action="{{ route('products.filter') }}" method="get">
                                        <div class="">
                                            <h3>GIỚI TÍNH</h3>
                                            <div class="item-child">
                                                <p>
                                                    <label>
                                                        <input style="margin-right: 10px; margin-left: 13px;" class="" name="filter_gioi-tinh" type="checkbox" value="Nam">Nam
                                                    </label>
                                                </p>
                                                <p>
                                                    <label>
                                                        <input style="margin-right: 10px;margin-left: 13px;" class="" name="filter_gioi-tinh" type="checkbox" value="Nữ">Nữ
                                                    </label>
                                                </p>
                                                <p>
                                                    <label>
                                                        <input style="margin-right: 10px;margin-left: 13px;" class="" name="filter_gioi-tinh" type="checkbox" value="Unisex">Unisex
                                                    </label>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="filter-sidebar">
                                            <h3>THEO GIÁ</h3>
                                            <div class="item-child">
                                                <p>
                                                    <label>
                                                        <input style="margin-right: 10px;margin-left: 13px;" class="" name="filter_khoang-gia" type="checkbox" value="1500000-3000000">1.500.000 - 3.000.000
                                                    </label>
                                                </p>
                                                <p>
                                                    <label>
                                                        <input style="margin-right: 10px;margin-left: 13px;" class="" name="filter_khoang-gia" type="checkbox" value="3000000-5000000">3.000.000 - 5.000.000
                                                    </label>
                                                </p>
                                                <p>
                                                    <label>
                                                        <input style="margin-right: 10px;margin-left: 13px;" class="" name="filter_khoang-gia" type="checkbox" value="5000000-100000000">&gt;5.000.000
                                                    </label>
                                                </p>
                                            </div>
                                        </div>
                                        <button class="btsearch" type="submit">Lọc</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

            <div class="d-flex flex-wrap col-10 align-content-start">
                    @foreach($products as $row)
                    @if (($catalog === null || $row->catalog_id == $catalog->id) && ($genderFilter === null || $row->sex == $genderFilter)&& ($priceRange === null || ($row->price >= $priceRange[0] && $row->price <= $priceRange[1])))
                    <div class="products">
                        <div class="pro ">
                            <img class="pic" src="{{ asset($row->img_link) }}" alt="" />
                            <div class="des">
                                <h5 class="prname">{{$row->name}}</h5>
                                <h6 class="sex">Sex: {{$row->sex}}</h6>
                                <h4 class="mt-2 price">{{ number_format($row->price, 0, ',', '.') }} đ</h4>
                                <div class="rating">
                                    @for ($i = 5; $i >= 1; $i--)
                                    <input type="radio" id="star-{{ $loop->index }}-{{ $i }}" name="rating-{{ $loop->index }}" value="{{ $i }}">
                                    <label for="star-{{ $loop->index }}-{{ $i }}"></label>
                                    @endfor
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
        </div>

    </div>
</body>

</html>