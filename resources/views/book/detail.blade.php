@extends('layouts.app')

@section('content')
    <main class="main-content" role="main">
        <div class="wrapper">
            <!-- /templates/product.liquid -->
            <div itemscope itemtype="http://schema.org/Product">
                <meta itemprop="url" content="https://www.shopbookshop.com/products/all-this-everyday-by-joanne-kyger">
                <meta itemprop="image" content="//cdn.shopify.com/s/files/1/0880/2454/products/Kryger-10_-_1_grande.jpg?v=1496961939">

                @include('common.message')
                @include('common.booksList')

                <hr class="hr--clear">
                <div class="text-center">
                    <a href="{{ url('/') }}" class="return-link">&larr; Back to BOOKS</a>
                </div>

		<div id="disqus_thread"></div>
                <script>

                    /**
                     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                    /*
                    var disqus_config = function () {
                    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                    };
                    */
                    (function() { // DON'T EDIT BELOW THIS LINE
                        var d = document, s = d.createElement('script');
                        s.src = 'https://fenlan96-com.disqus.com/embed.js';
                        s.setAttribute('data-timestamp', +new Date());
                        (d.head || d.body).appendChild(s);
                    })();
                </script>
                <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
            </div>
        </div>
    </main>
@endsection
