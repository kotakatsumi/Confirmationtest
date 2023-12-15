<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thanks page</title>
    <link rel="stylesheet" href="{{ asset('css/auth/register.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
</head>
<body>
  <div class="header">
  <h1 class="header__title">
    Fashionably Late
  </h1>
  <a class="login__button" href="/login">login</a>
</div>
  <div class="register-title">
    <h2>Register</h2>
  </div>
  <div class="register-main">
    <form class="form" action="/register" method="post">
    @csrf
    <div class="main__register-name">
      <p class="register-name__title">お名前</p>
      <div class="register-name__input">
        <input type="text" name="name" placeholder="例: 山田　太郎" />
      </div>
      <div class="register-name__error">
        @error('name')
        {{ $message }}
        @enderror
      </div>
    </div>
    <div class="main__register-email">
      <p class="register-email__title">メールアドレス</p>
      <div class="register-email__input">
        <input type="email" name="email" placeholder="例: test@example.com" />
      </div>
      <div class="form__error">
          @error('email')
          {{ $message }}
          @enderror
      </div>
    </div>
    <div class="main__register-password">
      <div class="form__group-title">
        <span class="form__label--item">パスワード</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="password" name="password" placeholder="coachtech1106" />
        </div>
        <div class="form__error">
          @error('password')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="main__register-bottom">
      <button class="register-bottom__letter" type="submit">登録</button>
    </div>
  </form>
</div>
</body>
</html>