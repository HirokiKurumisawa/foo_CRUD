@extends('layouts.master_crud')
@section('title', '編集ページ')
@section('content')
 
<p>{{$message}}</p>
<form class="form-horizontal" role="form" method="post" action="{{url('/crud',$data->id)}}">
<input type="hidden" name="_token" value="{{csrf_token()}}">
{{-- 隠しフィールド --}}
<input type="hidden" name="_method" value="PATCH">
 
 
  <!--↓↓名前↓↓-->
  <div class="form-group">
    <label for="name" class="control-label col-sm-2">名前:</label>
    <div class="col-sm-10">
    <input type="text" name="name" value="{{ old('name', $data->name) }}" id="name" class="form-control" placeholder="名前を文字を入力してください" autofocus>
    @if($errors->has('name'))
     <p class="text-danger" style="margin-bottom: 30px;">{{ $errors->first('name') }}</p>
    @endif
    <!--/.col-sm-10--></div>
  <!--/.form-group--></div>
  <!--↑↑名前↑↑-->
 
 
  <!--↓↓メールアドレス↓↓-->
  <div class="form-group">
    <label for="email" class="control-label col-sm-2">メールアドレス:</label>
    <div class="col-sm-10">
    <input type="email" name="mail" value="{{ old('mail', $data->mail) }}" id="email" class="form-control" placeholder="メールアドレスを入力してください" autofocus>
    @if($errors->has('mail'))
     <p class="text-danger" style="margin-bottom: 30px;">{{ $errors->first('mail') }}</p>
    @endif
    <!--/.col-sm-10--></div>
  <!--/.form-group--></div>
  <!--↑↑メールアドレス↑↑-->
 
 
  <!--↓↓性別↓↓-->
  <div class="form-group"><!--※.horizontalではラジオボタンをform-groupで囲む-->
  <label class="control-label col-sm-2">性別</label>
  <div class="col-sm-10">
  <label class="radio-inline">
    <input type="radio" name="gender" value="男性" @if(old('gender',"$data->gender")!='女性')checked="checked"@endif>男性
  </label>
  <label class="radio-inline">
    <input type="radio" name="gender" value="女性" @if(old('gender',"$data->gender")=='女性')checked="checked"@endif>女性
  </label>
  <!--/.col-sm-10--></div>
  <!--/.form-group--></div>
  <!--↑↑性別↑↑-->
 
 
  <!--↓↓年齢↓↓-->
  <div class="form-group">
    <label for="age" class="control-label col-sm-2">年齢:</label>
    <div class="col-sm-10">
    <input type="number" name="age" id="age" value="{{ old('age', $data->age) }}" class="form-control" placeholder="年齢を入力してください" autofocus>
    @if($errors->has('age'))
     <p class="text-danger" style="margin-bottom: 30px;">{{ $errors->first('age') }}</p>
    @endif
    <!--/.col-sm-10--></div>
  <!--/.form-group--></div>
  <!--↑↑年齢↑↑-->
 
 
  <!--↓↓都道府県↓↓-->
  <div class="form-group">
    <label for="pref" class="control-label col-sm-2">都道府県:</label>
    <div class="col-sm-10">
    <select name="pref" id="pref" class="form-control">
      <option value="">都道府県の選択</option>
      <option value="北海道" @if( old('pref',"$data->pref")=='北海道') selected @endif>北海道</option>
　　　　：　※省略
      <option value="沖縄県" @if( old('pref',"$data->pref") =='沖縄県') selected @endif>沖縄県</option>
    </select>
    @if($errors->has('pref'))
     <p class="text-danger" style="margin-bottom: 30px;">{{ $errors->first('pref') }}</p>
    @endif
    <!--/.col-sm-10--></div>
  <!--/.form-group--></div>
  <!--↑↑都道府県↑↑-->
 
 
  <!--↓↓生年月日↓↓-->
  <div class="form-group">
    <label for="birth" class="control-label col-sm-2">生年月日:</label>
    <div class="col-sm-10">
    <input type="date" name="birthday" id="birthday" value="{{ old('birthday',$data->birthday) }}" class="form-control" placeholder="生年月日を入力してください" autofocus>
    <p id="phone-help" class="help-block">記入例： 1937/12/26</p>
    @if($errors->has('birthday'))
     <p class="text-danger" style="margin-bottom: 30px;">{{ $errors->first('birthday') }}</p>
    @endif
    <!--/.col-sm-10--></div>
  <!--/.form-group--></div>
  <!--↑↑生年月日↑↑-->
 
 
  <!--↓↓電話↓↓-->
  <div class="form-group">
    <label for="tel" class="control-label col-sm-2">電話:</label>
    <div class="col-sm-10">
    <input type="number" name="tel" id="tel" value="{{ old('tel',$data->tel) }}" class="form-control" placeholder="電話番号を入力してください" autofocus>
    <p id="phone-help" class="help-block">記入例： 09077557720</p>
    @if($errors->has('tel'))
     <p class="text-danger" style="margin-bottom: 30px;">{{ $errors->first('tel') }}</p>
    @endif
    <!--/.col-sm-10--></div>
  <!--/.form-group--></div>
  <!--↑↑電話↑↑-->
 
 
<button class="btn btn-lg btn-primary btn-block" type="submit">送信</button>
</form>
@endsection
