@extends('layouts.app')
@section('title','カテゴリ詳細')
@section('content')
    <p>ID:{{ $category->id }}</p>
    <p>カテゴリ名:{{ $category->name }}</p>
    <p>登録日:{{ $category->created_at }}</p>
    <p>更新日:{{ $category->updated_at }}</p>

    このカテゴリに属している商品：
    <ul>
        @foreach($category->items as $item)
            <li>{{link_to_route('items.show',$item->name,['item'=>$item->id])}}</li>
        @endforeach
    </ul>
@endsection