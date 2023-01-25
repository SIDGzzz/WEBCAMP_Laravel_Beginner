@extends('layout')

{{-- タイトル --}}
@section('title')(詳細画面)@endsection

{{-- メインコンテンツ --}}
@section('contets')
        <h1>ユーザー登録</h1>
        @if (session('front.task_register_success') == true)
                ユーザーを登録しました！！<br>
            @endif
        <form action="/user/register" method="post">
            @csrf
            名前：<input name="name"><br>
            email：<input name="email"><br>
            パスワード：<input  name="password" type="password"><br>
            <button>登録する</button>
        </form>
@endsection