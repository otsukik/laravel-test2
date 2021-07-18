<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TOP</title>
</head>
<body>
    @if (count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif
    <form action="/thanks" method="post">
        @csrf
        <span>氏名</span>
        <br>
        <input type="text" name="name" value="{{ $name }}">
        <br>
        <span>メールアドレス</span>
        <br>
        <input type="email" name="email" value="{{ $email }}">
        <br>
        <button type="submit">送信する</button>
    </form>
</body>
</html>
