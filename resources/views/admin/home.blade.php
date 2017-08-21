@extends('admin.index')

@section('rightcontent')

    @include('common.message')

    <!-- 自定义内容区域 -->
    <div class="panel panel-default">
        <div class="panel-heading">图书列表</div>
        <table class="table table-striped table-hover table-responsive">
            <thead>
            <tr>
                <th>ID</th>
                <th>书名</th>
                <th>作者</th>
                <th>数量</th>
                <th>添加时间</th>
                <th width="120">操作</th>
            </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                <tr>
                    <th scope="row">{{ $book->id }}</th>
                    <td>{{ $book->name }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->amount }}</td>
                    {{--<td>{{ date('Y-m-d', $book->created_at) }}</td>--}}
                    <td>{{ $book->created_at->format('Y-m-d') }}</td>
                    <td>
                        <a href="{{ url('Admin/book/detail', ['id' => $book->id]) }}">详情</a>
                        <a href="{{ url('Admin/book/update', ['id' => $book->id]) }}">修改</a>
                        <a href="{{ url('Admin/book/delete', ['id' => $book->id]) }}"
                                onclick="if (confirm('确定要删除吗？') == false) return false;">删除</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- 分页  -->
    <div>
        <div class="pull-right">
            {{ $books->render() }}
        </div>

    </div>
@stop
