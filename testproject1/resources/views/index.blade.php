<!-- qiita -->
<!-- https://qiita.com/kt103/items/f3e7ef3158b90695d003 -->
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
        @foreach($articles as $article)
            <p>
                <!-- foreachで $articles(DBのデータ全部保持)から$articleでデータを渡す -->
                <!-- $articleからidを取得して”id”に渡している -->
                <!-- $articlesはDBのテーブル -->
                <a href='{{ route("article.show", ["id" => $article->id]) }}'>
                    {{ $article->content }}
                </a>
            </p>
        @endforeach
    </body>
</html>