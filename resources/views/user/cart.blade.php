@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Shopping Cart</div>
                <div class="panel-body">
                    <table class="table table-striped table-hover table-responsive">
                        <thead>
                        <tr>
                            <th id="firstLine" width="18%">

                            </th>
                            <th id="secondLine">
                                书名
                            </th>
                            <th id="thirdLine">
                                单价/元
                            </th>
                            <th id="forthLine">
                                购买数量
                            </th>
                            <th id="fifthLine">
                                总金额/元
                            </th>
                            <th id="sixthLine">

                            </th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
