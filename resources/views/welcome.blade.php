@extends('layouts.app')

@section('content')
    <div class="collection-hero">
        <div class="collection-hero__image is-init" style="background-image: url(&quot;//cdn.shopify.com/s/files/1/0880/2454/collections/Brooke_1024x1024.jpg?v=1434648703&quot;); transform: translate3d(0px, 155.333px, 0px);"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
            {{-- <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Your Application's Landing Page.
                </div>
            </div> --}}

            <!-- book -->
                <header class="section-header text-center">
                    <h1>BOOKS</h1>
                    <hr class="hr--small">
                    <div class="grid">
                        <div class="grid__item">
                            <div class="rte">
                                <p>We feature new rare-book arrivals from our Oakland shop on this page every few weeks (and in our brick and mortar store we offer 80-100 new rarities every two weeks!). Want updates when we post new books online? Sign up for our <a href="http://com.us4.list-manage.com/subscribe/post?u=90a4ad1b081ad7fd3697e732b&amp;id=845e2d5a03">mailing list</a>. Want a peek at new books in the shop? Follow us on <a href="https://www.instagram.com/bookshopoakland/">Instagram</a>. Questions? Contact us at info@shopbookshop.com. Happy reading!</p>
                                <h5></h5>
                            </div>
                        </div>
                    </div>
                    <hr class="hr--small hr--clear">
                </header>

                <!-- book list -->

                <div class="grid-uniform">
                    @foreach($books as $book)
                        <div class="grid__item grid-product medium--one-half large--one-third is-sold-out">
                            <div class="grid-product__wrapper">
                                <div class="grid-product__image-wrapper">
                                    <a class="grid-product__image-link" href="{{ url('book/detail', ['id' => $book->id]) }}">
                                        <img height="212" width="173" src="{{ url('/images/' . $book->image) }}" alt="{{ $book->name }} by {{ $book->author }}" class="grid-product__image">
                                    </a>

                                    @if ($book->amount == 0)
                                        <div class="grid-product__sold-out">
                                            <p>Sold<br /> Out</p>
                                        </div>
                                    @endif

                                </div>

                                <a href="{{ url('book/detail', ['id' => $book->id]) }}" class="grid-product__meta">
                                    <span class="grid-product__title">{{ $book->name }} by {{ $book->author }}</span>
                                    <span class="grid-product__price-wrap">
                                    <span class="long-dash">—</span>
                                    <span class="grid-product__price">

                                        $ {{ $book->price }}

                                    </span>
                                </span>

                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>


                <!-- page  -->
                <div>
                    <div class="pull-right">
                        {{ $books->render() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
