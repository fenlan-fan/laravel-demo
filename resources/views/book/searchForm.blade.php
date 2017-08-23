<form class="searchform" method="get" action="{{ url('book/search') }}">
    <input name="keyword" type="text" class="input-medium search-query" required="required" placeholder="Search Books...">
    {{--<button type="submit" class="btn btn-primary"><i class="fa fa-search fa-2x" aria-hidden="true"></i></button>--}}
</form>