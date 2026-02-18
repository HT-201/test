<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>paiza bbs</title>
        <style>body {padding: 10px;}</style>
    </head>
    <body>
        <h1>paiza bbs</h1>
        <P>{{ $message }}</P>

        <p>{{ $article->content }}</p>

        <p>
            <!-- ルーティングで指定した名前でhref記載できる(web.php) -->
            <a href={{ route('article.list') }}>一覧に戻る</a>
        </p>
    </body>
</html>