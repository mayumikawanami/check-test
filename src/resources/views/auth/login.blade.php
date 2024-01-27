@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div>
    <nav>
        <ul class="header-nav">
            <li class="header-nav__item">
                <a class="header-nav__link" href="/register">register</a>
            </li>
        </ul>
    </nav>
</div>
<div class="login-form__content">
        <div class="login-form__heading">
            <h2>Login</h2>
        </div>
        <form class="form" action="/login" method="post">
            @csrf
            <div class="form__group">
                <div class="form__group-title">メールアドレス
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="email" name="email" value="{{ old('email') }}" placeholder="例:test@exsmple.com" />
                    </div>
                </div>
                <div class="form__error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">パスワード
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="password" name="password" placeholder="例:coachtech1106" />
                    </div>
                </div>
                <div class="form__error">
                    @error('password')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="form__button">
                <button class="form__button-login" type="submit">ログイン</button>
            </div>
        </form>
    </div>
@endsection