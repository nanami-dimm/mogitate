@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/product.css')}}">
@endsection

@section('content')
<div class="products">
    <h2 class="products__heading content__heading">商品一覧</h2>
    <div class="products__inner">
        <aside class="products__inner-side">
            <form class="search-form" action="/products/search" method="get">
                @csrf
        <input class="search-form__keyword-input" type="text" name="keyword" placeholder="商品名で検索" value= "{{request('keyword')}}">
            <div class="search-form__actions">
                <input class="search-form__search-btn" type="submit" value="検索">
            </div>
        </form>
        </aside>
        <div class="products__inner-main">
            <div class="products__register">
                <form class="register-page" action="/products/register" method="get">
                    @csrf
                    <button class="register-page__btn">+商品を追加</button>
                </form>
            </div>
        <div class="products__inner-main-item">
            <form action="/products/{productId}" method="post">
            @foreach($products as $product )
            <tr class="products__item">
                <td class="products_data">{{$product ->name }}</td>
                <td class="products_data">{{$product ->price }}</td>
                <td class="products_data">{{$product ->iamge }}</td>
                <td class="products_data">{{$product ->seasons }}</td>
                <td class="products_data">{{$product ->description }}</td>
                <td class="products_data">
                <a class="products__detail-btn" href="#{{$product -> id}}"></a>
                </td>
            </tr>
            </form>
        </div>
        </div>
    </div>
</div>

@endforeach


{{ $pages->links() }}
@endsection