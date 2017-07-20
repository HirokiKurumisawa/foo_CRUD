@extends('layouts.master_crud')
@section('title', '詳細ページ')
 
@section('content')
<table class="table table-striped">
  <tr>
    <th>お名前</th>
    <td>{{$user->name}}</td>
   </tr>
  <tr>
    <th>メールアドレス</th>
    <td>{{$user->mail}}</td>
  </tr>
  <tr>
    <th>性別</th>
    <td>{{$user->gender}}</td>
  </tr>
  <tr>
    <th>年齢</th>
    <td>{{$user->age}}</td>
  </tr>
  <tr>
    <th>都道府県</th>
    <td>{{$user->pref}}</td>
  </tr>
  <tr>
    <th>誕生日</th>
    <td>{{$user->birthday}}</td>
  </tr>
  <tr>
    <th>電話番号</th>
    <td>{{$user->tel}}</td>
  </tr>
</table>
@endsection
