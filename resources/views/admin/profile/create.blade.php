<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>課題画面</title>
    </head>
    <body>
        <h1>add画面</h1>
        
        {{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'ニュースの新規作成')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>プロフィール作成</h2>
                <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-data">

            @if (count($errors) > 0)
            <ul>
              @foreach($errors->all() as $e)
              <li>{{ $e }}</li>
              @endforeach
            </ul>
            @endif
                            <div class="form-group row">
              <label class="col-md-2" for="name">氏名</label>
              <div class="col-md-10">
                <input type="text" class="form-control" name="name" value="">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-md-2" for="gender">性別</label>
              <div class="col-md-10">
                <input name="gender" type="radio" value="男性">男性<br />
                <input name="gender" type="radio" value="女性">女性
              </div>
            </div>

            <div class="form-group row">
              <label class="col-md-2" for="hobby">趣味</label>
              <div class="col-md-10">
                <input type="text" class="form-control" name="hobby"  rows="5">
              </div>
            </div>
	    
            <div class="form-group row">
              <label class="col-md-2" for="introduction">自己紹介</label>
              <div class="col-md-10">
                <textarea class="form-control" name="introduction" rows="10"></textarea>
              </div>
            </div>
            {{ csrf_field() }}
            <input type="submit" class="btn btn-primary" value="更新">
          </form>
            </div>
        </div>
    </div>
@endsection
    </body>
</html>