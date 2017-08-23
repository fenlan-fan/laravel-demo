@extends('admin.app')

@section('content')

    @if(Request::getPathInfo() == '/Admin/home')
        @include('admin.searchForm')
    @endif

    <!-- 中间内容区局 -->
    <div class="container">
        <div class="row">

            <!-- 左侧菜单区域   -->
            <div class="col-md-3">
                    <div class="list-group">
                        <a href="{{ url('Admin/home') }}" class="list-group-item
                    {{ Request::getPathInfo() != '/Admin/book/create' ? 'active' : '' }}
                                ">图书列表</a>
                        <a href="{{ url('Admin/book/create') }}" class="list-group-item
                    {{ Request::getPathInfo() == '/Admin/book/create' ? 'active' : '' }}
                                ">新增图书</a>
                    </div>
            </div>

            <!-- 右侧内容区域 -->
            <div class="col-md-9">
                @yield('rightcontent')
            </div>
        </div>
    </div>

@endsection
