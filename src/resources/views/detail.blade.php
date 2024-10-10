t@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css')}}">
@endsection

@section('content')
<div class="detail">
    <h2 class="detail__heading content__heading">
        商品一覧 > {{$id}}
    </h2>
    <div class="detail__inner">
        
            <div class="detail-form__group">
                <label class="detail-form__label" for="name">
                    商品名
                </label>
                    <input class="detail-form__input" type="text" name="name" id="name" value="{{ old('name') }}" placeholder="商品名を入力">
                    <td class="detail-form__data">{{$products['name']}}"></td>
                    <input type="hidden" name="name" value="{{ $products['name'] }}">
                   <p class="detail-form__error-message">
                    @error('name')
                    {{ $message }}
                    @enderror
                    </p> 
            </div>
            <div class="detail-form__group">
                <label class="detail-form__label" for="price">
                    値段
                </label>
                <input class="detail-form__input" type="text" name="price" id="price" value="{{old('price')}}" placeholder="値段を入力">
                <td class="detail-form__data">{{$products['price']}}"></td>
                <input type="hidden" name="price" value="{{ $products['price'] }}">
                
                <p class="detail-form__error-message">
                    @error('price')
                    {{ $message }}
                    @enderror
                    </p> 
            </div>
            <div class="detail-form__group">
                <label class="detail-form__label-image" for="image">
                    商品画像
                </label>
                <input class="detail-form__input-image"  type="file" name="image" id="image" value="{{ old('image') }}" >
                <td class="detail-form__data">{{$products['image']}}"></td>
                <input type="hidden" name="image" value="{{ $products['image'] }}">
                <p class="detail-form__error-message">
                @error('price')
                {{ $message }}
                @enderror
                </p>
            </div>
            <div class="detail-form__group">
                <label class="detail-form__label" for="seasons">
                    季節
                    
                </label>
                <div class="detail-form__seasons-inputs">

                    <div class="detail-form__seasons-option">
                        <label class="detail-form__seasons-label">
                        <input class="detail-form__seasons-input" name="spring" type="radio" id="spring" value="spring">
                        <span class="detail-form__seasons-text">春</span>
                        </label>
                    </div>
                    <div class="detail-form__seasons-option">
                        <label class="detail-form__seasons-label">
                        <input class="detail-form__seasons-input" name="summer" type="radio" id="summer" value="summer">
                        <span class="detail-form__seasons-text">夏</span>
                        </label>
                    </div>
                    <div class="detail-form__seasons-option">
                        <label class="detail-form__seasons-label">
                        <input class="detail-form__seasons-input" name="fall" type="radio" id="fall" value="fall">
                        <span class="detail-form__seasons-text">秋</span>
                        </label>
                    </div>
                    <div class="detail-form__seasons-option">
                        <label class="detail-form__seasons-label">
                        <input class="detail-form__seasons-input" name="winter" type="radio" id="winter" value="winter">
                        <span class="detail-form__seasons-text">冬</span>
                        </label>
                    </div>
                </div>
                <td class="detail-form__data">{{$products['season']}}"></td>
                <input type="hidden" name="season" value="{{ $products['season'] }}">
                <p class="detail-form__error-message">
                @error('seasons')
                {{ $message }}
                @enderror
                </p>
            </div>
            <div class="detail-form__group">
                <label class="detail-form__label" for="description">
                    商品説明
                </label>
                    <textarea class="detail-form__textarea" name="description" id="description" col="30" rows="10" placeholder="商品の説明を入力" ></textarea>
                    <td class="detail-form__data">{{$products['description']}}"></td>
                    <input type="hidden" name="description" value="{{ $products['description'] }}">
                        <p class="detail-form__error-message">
                        @error('description')
                        {{ $message }}
                        @enderror
                        </p>
            </div>
            <div class="detail-form__btn-inner">
                <input class="detail-form__return-btn" type="submit" value="戻る" name="back">
            <form action="products/{productId}/update" method="post">  
            <input class="detail-form__btn" type="submit" value="変更を保存"  name="reservation">
            </form>
            @csrf

            <<form action="products/{productId}/destroy" method="post">  
            <input class="detail-form__delete-btn" type="submit" value="">
            </form>
            @csrf
            </div>

        </form>
    </div>
</div>
@endsection

