<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task show</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="title-group">
        <h4>[ タイトル ]</h4>
        <P>{{ $task->title }}</P>
    </div>
    <div class="body-group">
        <h4>[ 本文 ]</h4>
        <p>{!! nl2br(e($task->body)) !!}</p>
    </div>
    <div class="button-group">
        <!-- $taskのidを元に編集ページへ遷移する -->
        <button onclick="location.href='/tasks'">一覧へ戻る</button>
        <button onclick="location.href='/tasks/{{ $task->id }}/edit'">編集する</button>
        <form action="/tasks/{{ $task->id }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
        </form>
    </div>
</body>
</html>
