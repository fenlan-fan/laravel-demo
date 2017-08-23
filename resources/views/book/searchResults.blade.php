@extends('layouts.app')

@section('content')

    @include('book.searchForm')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

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
