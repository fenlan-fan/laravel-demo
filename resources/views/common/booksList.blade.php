<div class="grid product-single">
    <!-- book image -->
    <div class="grid__item large--seven-twelfths medium--seven-twelfths text-center">
        <div class="product-single__photos">
            <div class="product-single__photo-wrapper">
                <img height="400" width="300" class="product-single__photo" id="ProductPhotoImg" src="{{ url('/images/' . $book->image) }}" alt="{{ $book->name }} by {{ $book->author }}">
            </div>
        </div>
    </div>

    <!-- book price and brief -->
    <div class="grid__item product-single__meta--wrapper medium--five-twelfths large--five-twelfths">
        <div class="product-single__meta">
            <h1 class="product-single__title" itemprop="name">{{ $book->name }} by {{ $book->author }}</h1>
            <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                    <span id="ProductPrice" class="product-single__price" itemprop="price">
                                        $ {{ $book->price }}
                                    </span>
                <hr class="hr--small">
                <meta itemprop="priceCurrency" content="USD">
                <link itemprop="availability" href="http://schema.org/OutOfStock">
            </div>

            <div class="product-single__description rte" itemprop="description">
                <span>{{ $book->brief }}</span>
            </div>

            <div class="social-sharing clean" data-permalink="https://www.shopbookshop.com/products/all-this-everyday-by-joanne-kyger">
                <a target="_blank" href="//www.facebook.com/sharer.php?u=https://www.shopbookshop.com/products/all-this-everyday-by-joanne-kyger" class="share-facebook">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                    <span class="share-title">Share</span>
                </a>
                <a target="_blank" href="//twitter.com/share?url=https://www.shopbookshop.com/products/all-this-everyday-by-joanne-kyger&amp;text=ALL%20THIS%20EVERYDAY%20by%20Joanne%20Kyger" class="share-twitter">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                    <span class="share-title">Tweet</span>

                </a>
                <a target="_blank" href="http://pinterest.com/pin/create/button/?url=https://www.shopbookshop.com/products/all-this-everyday-by-joanne-kyger&amp;media=//cdn.shopify.com/s/files/1/0880/2454/products/Kryger-10_-_1_1024x1024.jpg?v=1496961939&amp;description=ALL%20THIS%20EVERYDAY%20by%20Joanne%20Kyger" class="share-pinterest">
                    <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                    <span class="share-title">Pin it</span>
                </a>
                <a target="_blank" href="//plus.google.com/share?url=https://www.shopbookshop.com/products/all-this-everyday-by-joanne-kyger" class="share-google">
                    <!-- Cannot get Google+ share count with JS yet -->
                    <span class="fa fa-google" aria-hidden="true"></span>
                    <span class="share-title">+1</span>
                </a>
            </div>
        </div>
    </div>
</div>