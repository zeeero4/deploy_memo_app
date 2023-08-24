<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>memo create</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <a href="/memos">戻る</a>
    <h1>新規登録</h1>

    @if ($errors->any())
        <div class="error">
            <p>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            </p>
            <ul>
                @foreach ($errors->all() as $error )
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="/memos" method="post">
    @csrf
        <p>
            <label for="title">タイトル</label>
            <input type="text" name="title" value="{{ old('title') }}">
        </p>
        <p>
            <label for="body">本文</label>
            <textarea name="body">{{ old('body') }}</textarea>
        </p>
        <input type="submit" value="登録">
    </form>
</body>
</html>
