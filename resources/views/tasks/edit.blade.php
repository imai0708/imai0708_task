<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task edit</title>

</head>

<body>
    
    <h1>投稿論文編集</h1>
    <!-- 更新先はmemosのidにしないと増える php artisan rote:listで確認① -->
    <form action="/tasks/{{ $task->id }}" method="post">
        @csrf
        @method('PATCH')
        <p>
            <label for="title">タイトル</label><br>
            <input type="text" name="title" value="{{ $task->title }}">
        </p>
        <p>
            <label for="body">本文</label><br>
            <textarea name="body" class="body">{{ $task->body }}</textarea>
        </p>

        <input type="submit" value="更新">
        <button href="/tasks/{{ $task->id }}">詳細に戻る</button>
    </form>
</body>

</html>
