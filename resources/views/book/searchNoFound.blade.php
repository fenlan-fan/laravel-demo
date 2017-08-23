@extends('layouts.app')

@section('content')
    <form class="searchform" method="get" action="{{ url('book/search') }}">
        <input name="keyword" type="text" class="input-medium search-query" required="required" placeholder="Search Books...">
        <button type="submit" class="btn btn-default">Search</button>
    </form>
    <div class="container" align="center">
        <div class="row">
            <div class="col-md-12">
                <div class="error-template">
                    <h1><i class="fa fa-desktop fa-5x"></i></h1>
                    <h1>
                        Oops!</h1>
                    <h2>
                        Not Found</h2>
                    <div class="error-details">
                        Sorry, we may not have the books you want!
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
