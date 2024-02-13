@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
    <div class="contact-form__content">
        <div class="contact-form__heading">
            <h2>Contact</h2>
        </div>
        <div class="contact-form__inner">
        <form class="form" action="/confirm" method="post">
            @csrf
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">お名前</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text-name">
                        <input type="text" name="last_name" placeholder="例:山田" value="{{ old('last_name') }}" />
                        <input type="text" name="first_name" placeholder="例:太郎" value="{{ old('first_name') }}"/>
                    </div>
                </div>
                <div class="form__error">
                    @error('last_name')
                    {{ $message }}
                    @enderror
                    @error('first_name')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">性別</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--radio">
                        <input type="radio" name="gender" value="male" checked {{ old('gender') == 'male' ? 'checked' : '' }}>男性
                        <input type="radio" name="gender" value="female" {{ old('gender') == 'female' ? 'checked' : '' }}>女性
                        <input type="radio" name="gender" value="other" {{ old('gender') == 'other' ? 'checked' : '' }}>その他
                    </div>
                </div>
                <div class="form__error">
                    @error('gender')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">メールアドレス</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text-email">
                        <input type="email" name="email" placeholder="例:test@exsmple.com" value="{{ old('email') }}" />
                    </div>
                </div>
                <div class="form__error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">電話番号</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text-tell">
                        <input type="tell" name="tell_part1" placeholder="080" value="{{ old('tell_part1') }}" />
                        -
                        <input type="tell" name="tell_part2" placeholder="1234" value="{{ old('tell_part2') }}" />
                        -
                        <input type="tell" name="tell_part3" placeholder="5678" value="{{ old('tell_part3') }}" />
                    </div>
                </div>
                <div class="form__error">
                    @error('tell_part1')
                    {{ $message }}
                    @enderror
                    @error('tell_part2')
                    {{ $message }}
                    @enderror
                    @error('tell_part3')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">住所</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3"  value="{{ old('address') }}"/>
                    </div>
                </div>
                <div class="form__error">
                    @error('address')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">建物名</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" name="building" placeholder="例:千駄ヶ谷マンション101" value="{{ old('building') }}"/>
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">お問い合わせの種類</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text-select">
                        <select class="form__item-select" name="category_id">
                            <option value="">選択してください</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}"{{ old('category_id') == $category->id ? 'selected' : '' }}>
                                    {{ ($category->content) }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form__error">
                    @error('category_id')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">お問い合わせ内容</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text-detail">
                        <input type="textarea" name="detail" placeholder="お問い合わせ内容をご記載ください" value="{{ old('detail') }}"/>
                    </div>
                </div>
                <div class="form__error">
                    @error('detail')
                    {{ $message }}
                    @enderror
                </div>
            </div>

            <div class="form__button">
                <button class="form__button-submit" type="submit">確認画面</button>
            </div>
        </form>
    </div>
@endsection