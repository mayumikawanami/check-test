@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
    <div class="contact-form__content">
        <div class="contact-form__heading">
            <h2>Confirm</h2>
        </div>
        <form class="form" action="/contacts/confirm" method="post">
            @csrf
            <div class="confirm-table">
                <table class="confirm-table__inner">
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">お名前</th>
                        <td class="confirm-table__text">
                            {{ $contact['last_name'] }}　{{ $contact['first_name'] }}
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">性別</th>
                        <td class="confirm-table__text">
                            @if($contact['gender'] == 'male')
                                男性
                            @elseif($contact['gender'] == 'female')
                                女性
                            @else
                                その他
                            @endif
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">メールアドレス</th>
                        <td class="confirm-table__text">
                            {{ $contact['email'] }}
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">電話番号</th>
                        <td class="confirm-table__text">
                            {{ $contact['tell_part1'] }}{{ $contact['tell_part2'] }}{{ $contact['tell_part3'] }}
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">住所</th>
                        <td class="confirm-table__text">
                            {{ $contact['address'] }}
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">建物名</th>
                        <td class="confirm-table__text">
                            {{ $contact['building'] }}
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">お問い合わせの種類</th>
                        <td class="confirm-table__text">
                            {{ $categories->where('id', $contact['category_id'])->first()['content'] }}
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">お問い合わせ内容</th>
                        <td class="confirm-table__text">
                            {{ $contact['detail'] }}
                        </td>
                    </tr>
            </div>
        </form>
    </div>
    <div class="form__button">
        <button class="form__button-submit" type="submit">送信</button>
        <a class="edit__button" href="/">修正</a>
    </div>
@endsection