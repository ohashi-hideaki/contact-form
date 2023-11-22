@extends('layouts.app')

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/thanks.css') }}" />
</head>

<body>
  <main>
    <form class="form" action="/" method="post">
    @csrf
    @section('content')
    <div class="thanks__content">
      <div class="thanks__heading">
        <h2>ご意見いただきありがとうございました。</h2>
      </div>
      <button class="form__button-submit" type="submit">トップページ</button>
    </div>
    @endsection
    </form>
  </main>
</body>

</html>