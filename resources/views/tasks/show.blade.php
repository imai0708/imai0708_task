<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>task show</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>タスク詳細</h1>
    <h1>{{ $task->title }}</h1>
    <p>【タイトル】</p>
    <p>【内容】</p>
    <p>{!! nl2br(e($task->body)) !!}</p>

    {{-- <div class="button-group"> --}}
    {{-- <button> 
        <a href="/tasks">一覧に戻る</a>
    </button>
        <!-- $memoのidを元に編集ページへ遷移する -->
        <button onclick="location.href='/tasks/{{ $task->id }}/edit'">編集する</button>
        <form action="/tasks/{{ $task->id }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};"> --}}


    <div class="button-group">
        <button>
            <a href="/tasks">一覧に戻る</a>
        </button>
            <!-- $memoのidを元に編集ページへ遷移する -->
        <button>
            <a onclick="location.href='/tasks/{{ $task->id }}/edit'">編集する</a>
            <form action="/tasks/{{ $task->id }}" method="post">
        </button>
                @csrf
                @method('DELETE')
                <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
        </form>
    </div>
</body>

</html>
