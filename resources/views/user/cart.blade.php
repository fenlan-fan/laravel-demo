@extends('layouts.app')

@section('content')
    <div class="container">
        <hr />
        <table id="cart" class="table-striped">
            <thead>
            <tr>
                <th style="width:50%">Product</th>
                <th style="width:10%">Price</th>
                <th style="width:8%">Quantity</th>
                <th style="width:22%" class="text-center">Subtotal</th>
                <th style="width:10%"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($carts as $cart)
                <?php $book = \App\Book::find($cart->bookID); ?>
            <tr>
                <td data-th="Product">
                    <div class="row">
                        <div class="col-sm-2 hidden-xs"><img src="{{ url('/images/' . $book->image) }}" alt="..." class="img-responsive"/></div>
                        <div class="col-sm-10">
                            <h4 class="nomargin">{{ $book->name }}</h4>
                            <p>{{ $book->author }}</p>
                        </div>
                    </div>
                </td>
                <td data-th="Price">{{ $book->price }}</td>
                <form method="post" action="" enctype="multipart/form-data">

                    {{ csrf_field() }}

                <td data-th="Quantity">
                    <input name="amount" type="number" class="form-control text-center" value="{{ $cart->amount }}">
                    <input name="cartID" type="hidden" class="form-control text-center" value="{{ $cart->id }}">
                </td>
                <td data-th="Subtotal" class="text-center">{{ $book->price * $cart->amount }}</td>
                <td class="actions" data-th="">
                    <button type="submit" class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
                    <a href="{{ url('/cart/delete', ['id' => $cart->id]) }}"
                            onclick="if (confirm('确定要删除吗？') == false) return false;"
                            class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a>
                </td>
                </form>
            </tr>
                <?php $total = $total + $book->price * $cart->amount; ?>
            @endforeach
            <tfoot>
                <tr class="visible-xs">
                    <td class="text-center"><strong>{{ $total }}</strong></td>
                </tr>
                <tr>
                    <td><a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                    <td colspan="2" class="hidden-xs"></td>
                    <td class="hidden-xs text-center"><strong>Total {{ $total }}</strong></td>
                    <td><a href="#" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
                </tr>
            </tfoot>
        </table>
        </tbody>
    </div>
@endsection
