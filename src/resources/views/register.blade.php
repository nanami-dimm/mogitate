@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css')}}">
@endsection

@section('content')
<div class="register">
    <h2 class="register__heading register-content__heading">商品登録</h2>
    <div class="register__inner">
        <form action="/products" method="post">
            @csrf
            <div class="register-form__group">
                <label class="register-form__label" for="name">
                    商品名<span class="register-form__required">必須</span>
                </label>
                    <input class="register-form__input" type="text" name="name" id="name" value="{{ old('name') }}" placeholder="商品名を入力">
                <p class="register-form__error-message">
                @error('name')
                {{ $message }}
                @enderror
                </p>
            </div>
            <div class="register-form__group">
                <label class="register-form__label" for="price">
                    値段<span class="register-form__required">必須</span>
                </label>
                <input class="register-form__input" type="text" name="price" id="price" value="{{ old('price') }}" placeholder="値段を入力" >
                <p class="register-form__error-message">
                @error('price')
                {{ $message }}
                @enderror
                </p>
                </div>
            <div class="register-form__group">
                <label class="register-form__label" for="image">
                    商品画像<span class="register-form__required">必須</span>
                </label>
                <input class="register-form__input"  type="file" name="image" id="image" value="{{ old('image') }}" >
                <p class="register-form__error-message">
                @error('image')
                {{ $message }}
                @enderror
                </p>
            </div>
            <div class="register-form__group">
                <label class="register-form__label" for="seasons">
                    季節<span class="register-form__required">必須</span>
                    <span class="register-form__sellect">複数選択可</span>
                </label>
                <div class="register-form__seasons-inputs">

                    <div class="register-form__seasons-option">
                        <label class="register-form__seasons-label">
                        <input class="register-form__seasons-input" name="spring" type="radio" id="spring" value="spring">
                        <span class="register-form__seasons-text">春</span>
                        </label>
                    </div>
                    <div class="register-form__seasons-option">
                        <label class="register-form__seasons-label">
                        <input class="register-form__seasons-input" name="summer" type="radio" id="summer" value="summer">
                        <span class="register-form__seasons-text">夏</span>
                        </label>
                    </div>
                    <div class="register-form__seasons-option">
                        <label class="register-form__seasons-label">
                        <input class="register-form__seasons-input" name="fall" type="radio" id="fall" value="fall">
                        <span class="register-form__seasons-text">秋</span>
                        </label>
                    </div>
                    <div class="register-form__seasons-option">
                        <label class="register-form__seasons-label">
                        <input class="register-form__seasons-input" name="winter" type="radio" id="winter" value="winter">
                        <span class="register-form__seasons-text">冬</span>
                        </label>
                    </div>
                </div>
                <p class="register-form__error-message">
                @error('seasons')
                {{ $message }}
                @enderror
                </p>
            </div>
            <div class="register-form__group">
                <label class="register-form__label" for="description">
                    商品説明<span class="register-form__required">必須</span>
                </label>
                    <textarea class="register-form__textarea" name="description" id="description" col="30" rows="10" placeholder="商品の説明を入力" ></textarea>
                        <p class="register-form__error-message">
                        @error('description')
                        {{ $message }}
                        @enderror
                        </p>
            </div>
            <div class="register-form__btn-inner">
                <input class="register-form__return-btn" type="submit" value="戻る" name="back">
                
            <input class="register-form__btn" type="submit" value="登録"  name="register">
            
            </div>
        </form>
    </div>
</div>
@endsection

