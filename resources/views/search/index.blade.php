@extends('layouts.app')
<div class="container">
       <div class="row">
            <div class="col-md-3">
                <form class="form-inline">
                    <div class="form-group">
                    <input type="text" name="keyword" value="{{ $keyword }}"
                    placeholder="商品名かカテゴリ名を入力">
                    <input type="submit" value="検索" >
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container">

<div class="paginate">
    {{ $items->render('pagination::bootstrap-4') }}
</div>
</div>