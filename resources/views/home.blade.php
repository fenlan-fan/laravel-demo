@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <p>Your name is {{ Auth::user()->name }}</p>
                    <p>Your email is {{ Auth::user()->email }}</p>
                    <p>Your created acount at {{ Auth::user()->created_at }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
