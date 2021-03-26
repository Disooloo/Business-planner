@extends('layout')
@section('main_title') Отзывы @endsection

@section('main_content')
<h1>Оставте свой отзыв</h1>
<form method="post" action="/reciew/check">
  @csrf
  <input type="email" name="email" id="emain" placeholder="Введлите ваш email" class="form-control"><br>
  <input type="text" name="subject" id="subject" placeholder="Введлите Отзыв" class="form-control"><br>
  <textarea name="message" id="message" placeholder="Введлите ваш сообщение" class="form-control"></textarea><br>
  <button type="submit" class="btn btm-success">Отправить</button>
</form>

@endsection