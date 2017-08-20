<form class="form-horizontal" method="post" enctype="multipart/form-data" action="">

    {{ csrf_field() }}

    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">书名</label>

        <div class="col-sm-5">
            <input type="text" name="name"
                   value="{{ old('name') ? old('name') : $book->name }}"
                   class="form-control" id="name" placeholder="请输入书名">
        </div>
        <div class="col-sm-5">
            <p class="form-control-static text-danger">{{ $errors->first('.name') }}</p>
        </div>
    </div>
    <div class="form-group">
        <label for="author" class="col-sm-2 control-label">作者</label>

        <div class="col-sm-5">
            <input type="text" name="author"
                   value="{{ old('author') ?  old('author') : $book->author }}"
                   class="form-control" id="author" placeholder="请输入图书作者">
        </div>
        <div class="col-sm-5">
            <p class="form-control-static text-danger">{{ $errors->first('author') }}</p>
        </div>
    </div>
    <div class="form-group">
        <label for="amount" class="col-sm-2 control-label">数量</label>

        <div class="col-sm-5">
            <input type="text" name="amount"
                   value="{{ old('amount') ?  old('amount') : $book->amount }}"
                   class="form-control" id="amount" placeholder="请输入图书数量">
        </div>
        <div class="col-sm-5">
            <p class="form-control-static text-danger">{{ $errors->first('amount') }}</p>
        </div>
    </div>
    <div class="form-group">
        <label for="price" class="col-sm-2 control-label">价格</label>

        <div class="col-sm-5">
            <input type="text" name="price"
                   value="{{ old('price') ?  old('price') : $book->price }}"
                   class="form-control" id="price" placeholder="请输入图书价格">
        </div>
        <div class="col-sm-5">
            <p class="form-control-static text-danger">{{ $errors->first('price') }}</p>
        </div>
    </div>
    <div class="form-group">
        <label for="image" class="col-sm-2 control-label">封面</label>

        <div class="col-sm-5">
            <input type="file" name="image" required="required"
                   value="{{ old('image') ?  old('image') : $book->image }}"
                   class="form-control" id="image" placeholder="请选择图书封面">
        </div>
        <div class="col-sm-5">
            <p class="form-control-static text-danger">{{ $errors->first('image') }}</p>
        </div>
    </div>
    <div class="form-group">
        <label for="brief" class="col-sm-2 control-label">图书简介</label>

        <div class="col-sm-5">
            <textarea name="brief" cols="50" rows="10"
                      class="form-control" id="brief" placeholder="请输入图书简介"
            >{{ old('brief') ?  old('brief') : $book->brief }}</textarea>
        </div>
        <div class="col-sm-5">
            <p class="form-control-static text-danger">{{ $errors->first('brief') }}</p>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">提交</button>
        </div>
    </div>
</form>
