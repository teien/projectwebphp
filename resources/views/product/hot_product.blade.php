<div id="products1" class="product">
    <a>SẢN PHẨM NỔI BẬT</a>
    <div class="owl-carousel owl-theme ms-4">
        @foreach ($product as $index)
        <div class="pro item text-center">
            <img src="{{ asset($index->img_link) }}" class="img-fluid" alt="" />
            <h5 style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; text-align: center; margin: 15px 22px;">{{ $index->name }}</h5>
            <h4 class="mt-2 price">{{ number_format($index->price, 0, ',', '.') }} đ</h4>
            <div class="des">
                <div class="rating">
                    @for ($i = 5; $i >= 1; $i--)
                        <?php
                        $product_id = $index->id;
                        ?>
                        <input type="radio" id="star-{{ $product_id }}-{{ $i }}" name="rating-{{ $product_id }}" value="{{ $i }}">
                        <label for="star-{{ $product_id }}-{{ $i }}"></label>
                    @endfor
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
