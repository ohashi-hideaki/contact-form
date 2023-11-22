@extends('layouts.app')

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  @section('css')
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
  @endsection
</head>

<body>
  <main>
  @section('content')
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>お問い合わせ</h2>
      </div>
      <form class="form" action="/contacts/confirm" method="post">
      @csrf
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <div class="form__input--name"> 
                <div class="form_input--name--first"> 
                  <input type="text" name="first_name" value="{{ old('first_name') }}" />
                  <p class="example">例）山田</p>
                  <div class="form__error">
                  @error('first_name')
                  {{ $message }}
                  @enderror
                  </div>
                </div>
                <div class="form_input--neme--last">
                  <input type="text" name="last_name" value="{{ old('last_name') }}"/>
                  <p class="example">例）太郎</p>
                  <div class="form__error">
                  @error('last_name')
                   {{ $message }}
                  @enderror
                  </div>
                </div>
              </div>
            </div>          
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">性別</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
              <div class="form__input--choice">
                <input type="radio" name="gender" class="gender" id="gender__choice1" value="{{ old('gender') }}"  checked />
                <lavel for="gender__choice1">男性</lavel>
                <input type="radio" name="gender" class="gender" id="gender__choice2" value="{{ old('gender') }}"/>
                <lavel for="gender__choice2">女性</lavel>
              </div>
              <div class="form__error">
                @error('gender')
                  {{ $message }}
                @enderror
              </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" value="{{ old('email') }}" />
              <p class="example">例）test@example.com</p>
            </div>
            <div class="form__error">
              @error('email')
                {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">郵便番号</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <div class="form__input--post">
                <p>〒</p>
                <input type="text" name="postcode" value="{{ old('postcode') }}" />
              </div>
              <p class="example">例）123-4567</p>
            </div>
            <div class="form__error">
              @error('postcode')
                {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">住所</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="address" value="{{ old('address') }}" />
              <p class="example">例）東京都渋谷区千駄ヶ谷1-2-3</p>
            </div>
            <div class="form__error">
              @error('address')
                {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">建物名</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="building_name" value="{{ old('building_name') }}" />
              <p class="example">例）千駄ヶ谷マンション101</p>
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">ご意見</span>
            <span class="form__label--required">※</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--textarea">
              <textarea name="opinion" value="{{ old('opinion') }}"></textarea>
            </div>
            <div class="form__error">
              @error('opinion')
                {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">確認</button>
        </div>
      </form>
    </div>
  @endsection
  </main>
</body>

</html>