@extends('admin.app')

@section('style')
    <link href="//cdn.shopify.com/s/files/1/0880/2454/t/2/assets/timber.scss.css?10061947258110571957" rel="stylesheet" type="text/css" media="all" />
    <link href="//cdn.shopify.com/s/files/1/0880/2454/t/2/assets/theme.scss.css?10061947258110571957" rel="stylesheet" type="text/css" media="all" />
@endsection


@section('content')
    <main class="main-content" role="main">
        <div class="wrapper">
            <!-- /templates/product.liquid -->
            <div itemscope itemtype="http://schema.org/Product">
                <meta itemprop="url" content="https://www.shopbookshop.com/products/all-this-everyday-by-joanne-kyger">
                <meta itemprop="image" content="//cdn.shopify.com/s/files/1/0880/2454/products/Kryger-10_-_1_grande.jpg?v=1496961939">

                @include('common.booksList')

                <hr class="hr--clear">
                <div class="text-center">
                    <a href="{{ url('/Admin/home') }}" class="return-link">&larr; Back to BOOKS</a>
                </div>
            </div>
        </div>
    </main>
@endsection
