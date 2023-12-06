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
        .woocommerce-products-header h1 {
            font-weight: 300;
            font-size: 70px;
            line-height: 70px;
            text-align: center;
            letter-spacing: .1em;
            text-transform: lowercase;
            color: #000;
            padding: 50px;
        }

        .uk-link {
            color: #1e87f0;
            text-decoration: none;
            cursor: pointer;
        }

        .woocommerce-breadcrumb a {
            color: #999;
        }

        .product-cat-wrap .uk-container,
        .single-product-wrap .uk-container {
            display: block;
            max-width: 1600px;
        }

        .uk-container {
            padding-left: 40px;
            padding-right: 40px;
        }

        .uk-container {
            padding-left: 30px;
            padding-right: 30px;
        }

        .uk-container {
            display: flow-root;
            box-sizing: content-box;
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
            padding-left: 15px;
            padding-right: 15px;
        }

        a {
            color: gray;
            text-decoration: none;
            cursor: pointer;
        }

        .uk-width-2-5\@s {
            width: 40%;
        }

        [class*=uk-width] {
            box-sizing: border-box;
            width: 100%;
            max-width: 100%;
        }

        .uk-child-width-1-2>* {
            width: 50%;
        }

        [class*=uk-child-width]>* {
            box-sizing: border-box;
            width: 100%;
        }

        .uk-grid-item-match,
        .uk-grid-match>* {
            display: flex;
            flex-wrap: wrap;
        }

        .uk-grid-column-small>*,
        .uk-grid-small>* {
            padding-left: 15px;
        }

        .uk-grid>* {
            padding-left: 30px;
            margin: 0;
        }


        .uk-grid {
            display: flex;
            flex-wrap: wrap;
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .sidebar-product .uk-panel {
            margin-bottom: 30px;
        }

        .uk-panel>:last-child {
            margin-bottom: 0;
        }

        .uk-panel {
            display: flow-root;
            position: relative;
            box-sizing: border-box;
        }

        .uk-grid {
            display: flex;
            flex-wrap: wrap;
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .filter-by-brand .list-cat {
            height: 100%;
            overflow-y: auto;
            max-height: 192px;

        }
    </style>
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
                        <div class="">
                            <div class="nav-bar">


                                <div class="sidebar-product uk-visible@s">
                                    <div class="uk-panel widget widget_text" id="text-2">
                                        <h3>

                                            Thương hiệu
                                        </h3>

                                        <div class="uk-panel textwidget">
                                            <p>
                                            </p>
                                            <div class="filter-by-brand">
                                                <input type="text" class="uk-input" id="myInput" onkeyup="myFunction()" placeholder="Tìm kiếm nhanh" title="Type in a name">
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
                                                            <tr>
                                                                <td> <a href="" class="">Art de Parfum</a> </td>
                                                            </tr>
                                                            <tr>
                                                                <td> <a href="" class="">Astrophil Stella</a> </td>
                                                            </tr>
                                                            <tr>
                                                                <td> <a href="" class="">Attar Collection</a> </td>
                                                            </tr>
                                                            <tr>
                                                                <td> <a href="" class="">Azzaro</a> </td>
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
                                                    <form class="form-filter-price" action="/shop/" method="GET">

                                                        <div class="filter-sidebar gender-filter">
                                                            <h3>GIỚI TÍNH</h3>
                                                            <div class="item-child">

                                                                <p>
                                                                    <label>
                                                                        <input class="uk-checkbox checkbox-filter-sidebar gender-checkbox-filter" name="filter_gioi-tinh" type="checkbox" value="nam">Nam</label>
                                                                </p>

                                                                <p>
                                                                    <label>
                                                                        <input class="uk-checkbox checkbox-filter-sidebar gender-checkbox-filter" name="filter_gioi-tinh" type="checkbox" value="nu">Nữ</label>
                                                                </p>

                                                                <p>
                                                                    <label>
                                                                        <input class="uk-checkbox checkbox-filter-sidebar gender-checkbox-filter" name="filter_gioi-tinh" type="checkbox" value="unisex">Unisex</label>
                                                                </p>

                                                            </div>

                                                        </div>


                                                        <div class="filter-sidebar season-filter">
                                                            <h3>MÙA</h3>
                                                            <div class="item-child">
                                                                <p>
                                                                    <label>
                                                                        <input class="uk-checkbox checkbox-filter-sidebar season-checkbox-filter" name="filter_mua" type="checkbox" value="dong">Đông</label>
                                                                </p>

                                                                <p>
                                                                    <label>
                                                                        <input class="uk-checkbox checkbox-filter-sidebar season-checkbox-filter" name="filter_mua" type="checkbox" value="ha">Hạ</label>
                                                                </p>

                                                                <p>
                                                                    <label>
                                                                        <input class="uk-checkbox checkbox-filter-sidebar season-checkbox-filter" name="filter_mua" type="checkbox" value="thu">Thu</label>
                                                                </p>

                                                                <p>
                                                                    <label>
                                                                        <input class="uk-checkbox checkbox-filter-sidebar season-checkbox-filter" name="filter_mua" type="checkbox" value="xuan">Xuân</label>
                                                                </p>

                                                            </div>
                                                        </div>

                                                        <div class="filter-sidebar">
                                                            <h3>THEO GIÁ</h3>
                                                            <div class="item-child">
                                                                <p>
                                                                    <label>
                                                                        <input class="uk-checkbox checkbox-filter-sidebar price-checkbox-filter" name="filter_khoang-gia" type="checkbox" value="1500000-3000000">1.500.000 - 3.000.000</label>
                                                                </p>
                                                                <p>
                                                                    <label>
                                                                        <input class="uk-checkbox checkbox-filter-sidebar price-checkbox-filter" name="filter_khoang-gia" type="checkbox" value="3000000-5000000">3.000.000 - 5.000.000</label>
                                                                </p>
                                                                <p>
                                                                    <label>
                                                                        <input class="uk-checkbox checkbox-filter-sidebar price-checkbox-filter" name="filter_khoang-gia" type="checkbox" value="5000000-100000000">&gt;5.000.000</label>
                                                                </p>
                                                            </div>
                                                        </div>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="content-product-cat">
                                    <form class="woocommerce-ordering" method="get">
                                        <select name="orderby" class="orderby  uk-select" aria-label="Đơn hàng của cửa hàng">
                                            <option value="popularity">Thứ tự theo mức độ phổ biến</option>
                                            <option value="rating">Thứ tự theo điểm đánh giá</option>
                                            <option value="date" selected="selected">Mới nhất</option>
                                            <option value="price">Thứ tự theo giá: thấp đến cao</option>
                                            <option value="price-desc">Thứ tự theo giá: cao xuống thấp</option>
                                        </select>
                                        <input type="hidden" name="paged" value="1">
                                    </form>

                                </div>


                            </div>
                            <div class="d-flex flex-wrap col-10">
                                @foreach($products as $row)
                                <div class="product">
                                    <img src="{{$row->img_link}}" alt="" />
                                    <div class="des">
                                        <span>HOT</span>
                                        <h5>{{$row->name}}</h5>
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
                                        <h4>Price :{{$row->price}}đ</h4>
                                        <a href=""><i class="fa-solid fa-cart-shopping cart"></i></a>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html>