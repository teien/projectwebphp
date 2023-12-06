<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse header justify-content-between flex-row" id="navbarNav">
            <ul class="navbar-nav text-center d-flex gap-3 flex-row" id="navbarmenu">
                <li class="nav-item active ">
                    <a class="nav-link" href="/">Trang chủ</a>
                </li>
                <li class="nav-item d-none d-sm-block">
                    <a class="nav-link" href="#">Giới thiệu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Thương Hiệu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/product">Sản phẩm</a>
                </li>
                <li class="nav-item d-none d-sm-block">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item d-none d-sm-block ">
                    <a class="nav-link" href="#">Liên hệ</a>
                </li>
            </ul>
            <div class="logo d-none d-sm-block ">
                <img width="80px" src="https://xxivstore.com/wp-content/uploads/2023/10/XXIV-Logo-2.svg" alt="" />
            </div>
            <div class="icon-header d-flex flex-unwrap">
                <i class="fa-solid fa-magnifying-glass"></i>
                <a href="/login"><i class="fa-regular fa-user"></i></a>
                <i class="fa-solid fa-cart-shopping"></i>
            </div>
        </div>
    </nav>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var navbarToggler = document.querySelector(".navbar-toggler");
            var navbarCollapse = document.querySelector("#navbarNav");
            navbarToggler.addEventListener("click", function() {
                navbarCollapse.classList.toggle("show");
            });
        });
    </script>

</header>
