<div id="products1" class="product">
    <a>Sales</a>
    <div class="owl-carousel owl-theme ms-4">
        @foreach ($product as $index )
        <div class=" pro item">
            <img src="{{ asset($index->img_link) }} " class="img-fluid" alt="" />
            <h5 style=" white-space: nowrap; overflow: hidden;text-overflow: ellipsis; text-align: center; margin: 15px 22px;">{{$index->name}}</h5>
            <h4 class="mt-2 price">{{ number_format($index->price, 0, ',', '.') }} đ</h4>
            <div class="des">
                <div class="rating ms-auto">
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
            </div>
        </div>
        @endforeach
    </div>
</div>
