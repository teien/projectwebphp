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
    <div id="tm-main" class="tm-main uk-section uk-section-default" uk-height-viewport="expand: true" style="min-height: 0px;">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                <header class="woocommerce-products-header uk-margin-medium-top">
                    <h1 class="woocommerce-products-header__title page-title uk-text-center shop">Shop</h1>


                </header>

                <div class="breadcrumb-cat">
                    <div class="uk-container">
                        <nav class="woocommerce-breadcrumb"><a href="https://xxivstore.com">Trang chủ</a>&nbsp;/&nbsp;Shop</nav>
                    </div>
                </div>

                <div class="product-cat-wrap d-flex row">
                    <div class="uk-child-width-1-2 uk-grid-match uk-grid-column-small uk-grid" uk-grid="">
                        <div class="containerr">
                            <div class="nav-bar">


                                <div class="sidebar-product uk-visible@s">
                                    <div  class="uk-panel widget widget_text" id="text-2">
                                        <h3>

                                            Thương hiệu
                                        </h3>

                                        <div class="uk-panel textwidget">
                                            <p>
                                            </p>
                                            <div class="filter-by-brand">
                                                <form action="{{ route('search') }}" method="GET">
                                                    <input class="ipsearch" type="text" class="uk-input" name="search" placeholder="Tìm kiếm nhanh" title="Type in a name">
                                                    <button class="btsearch" type="submit">Tìm kiếm</button>
                                                </form>
                                                <div class="list-cat">
                                                    <table id="myTable">
                                                        <tbody>
                                                            <tr>
                                                                <td> <a href="" class="">Creed</a> </td>
                                                            </tr>
                                                            <tr>
                                                                <td> <a href="" class="">Tom Ford</a> </td>
                                                            </tr>
                                                            <tr>
                                                                <td> <a href="" class="">Dior</a> </td>
                                                            </tr>
                                                            <tr>
                                                                <td> <a href="" class="">By Kilian</a> </td>
                                                            </tr>
                                                            <tr>
                                                                <td> <a href="" class="">Hermès</a> </td>
                                                            </tr>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="uk-panel widget widget_custom_html" id="custom_html-2">
                                        <div class="widget_text item-filter">
                                            <div class="widget_text sidebar-box">
                                                <div class="textwidget custom-html-widget">
                                                    <form class="form-filter-price" action="{{ route('products.filter') }}" method="GET">
                                                        <div class="filter-sidebar gender-filter">
                                                            <h3>GIỚI TÍNH</h3>
                                                            <div class="item-child">
                                                                <p>
                                                                    <label>
                                                                        <input class="uk-checkbox checkbox-filter-sidebar gender-checkbox-filter" name="filter_gioi-tinh" type="checkbox" value="nam">Nam
                                                                    </label>
                                                                </p>
                                                                <p>
                                                                    <label>
                                                                        <input class="uk-checkbox checkbox-filter-sidebar gender-checkbox-filter" name="filter_gioi-tinh" type="checkbox" value="nu">Nữ
                                                                    </label>
                                                                </p>
                                                                <p>
                                                                    <label>
                                                                        <input class="uk-checkbox checkbox-filter-sidebar gender-checkbox-filter" name="filter_gioi-tinh" type="checkbox" value="unisex">Unisex
                                                                    </label>
                                                                </p>
                                                            </div>
                                                        </div>

                                                        <div class="filter-sidebar">
                                                            <h3>THEO GIÁ</h3>
                                                            <div class="item-child">
                                                                <p>
                                                                    <label>
                                                                        <input class="uk-checkbox checkbox-filter-sidebar price-checkbox-filter" name="filter_khoang-gia" type="checkbox" value="1500000-3000000">1.500.000 - 3.000.000
                                                                    </label>
                                                                </p>
                                                                <p>
                                                                    <label>
                                                                        <input class="uk-checkbox checkbox-filter-sidebar price-checkbox-filter" name="filter_khoang-gia" type="checkbox" value="3000000-5000000">3.000.000 - 5.000.000
                                                                    </label>
                                                                </p>
                                                                <p>
                                                                    <label>
                                                                        <input class="uk-checkbox checkbox-filter-sidebar price-checkbox-filter" name="filter_khoang-gia" type="checkbox" value="5000000-100000000">&gt;5.000.000
                                                                    </label>
                                                                </p>
                                                            </div>
                                                            <button type="submit">Lọc</button>
                                                        </div>

                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="content-product-cat">
                                    <form class="woocommerce-ordering" method="get" action="{{ route('products.search') }}">
                                        <select name="orderby" class="orderby uk-select" aria-label="Đơn hàng của cửa hàng">
                                            <option value="price" {{ isset($orderBy) && $orderBy === 'price' ? 'selected' : '' }}>
                                                Thứ tự theo giá: thấp đến cao
                                            </option>
                                            <option value="price-desc" {{ isset($orderBy) && $orderBy === 'price-desc' ? 'selected' : '' }}>
                                                Thứ tự theo giá: cao xuống thấp
                                            </option>
                                        </select>
                                        <input type="hidden" name="paged" value="1">
                                        <br><button type="submit">Tìm kiếm</button></br>
                                    </form>
                                </div>


                                <div class="d-flex flex-wrap col">
                                    @foreach($products as $row)
                                    <div class="products">
                                        <div class="pro ">
                                            <img class="pic" src="{{ asset($row->img_link) }}" alt="" />
                                            <div class="des">
                                                <span>HOT</span>
                                                <h5 class="prname">{{$row->name}}</h5>
                                                <div class="rating">
                                                    <input type="radio" id="star5" name="rating" value="5" />
                                                    <label for="star5"></label>
                                                    <input type="radio" id="star4" name="rating" value="4" />
                                                    <label for="star4"></label>
                                                    <input type="radio" id="star3" name="rating" value="3" />
                                                    <label for="star3"></label>
                                                    <input type="radio" id="star2" name="rating" value="2" />
                                                    <label for="star2"></label>
                                                    <input type="radio" id="star1" name="rating" value="1" />
                                                    <label for="star1"></label>
                                                </div>
                                                <h5>Sex: {{$row->sex}}</h5>
                                                <h4>Price :{{$row->price}}đ</h4>
                                                <a href=""><i class="fa-solid fa-cart-shopping cart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>
                </div>    
            </main>
        </div>
    </div>
</body>

</html>
