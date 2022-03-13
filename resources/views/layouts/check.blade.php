<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>確認画面</title>
    <style>li { list-style: none; }
    ul { border-left:2px solid #999; }
    </style>
</head>
<body>
    <h2>入力内容にお間違いはございませんでしょうか？<br>問題無ければOKボタンを押してください</h2>
    <form action="send" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="name" value="{{ $items['name'] }}"><br>
        <tr><th>氏名: </th><td>{{ $items['name'] }}</td></tr>
        <input type="hidden" name="mail" value="{{ $items['tel'] }}"><br>
        <tr><th>電話番号: </th><td>{{ $items['tel'] }}</td></tr>
        <input type="hidden" name="tel" value="{{ $items['mail'] }}"><br>
        <tr><th>メールアドレス: </th><td>{{ $items['mail'] }}</td></tr>
        <input type="hidden" name="content" value="{{ $items['content'] }}"><br>
        <tr><th>お問い合わせ内容: </th><td>{{ $items['content'] }}</td></tr><br>
        <input type="submit" value="送信する">
    </form>
</html>
</body>