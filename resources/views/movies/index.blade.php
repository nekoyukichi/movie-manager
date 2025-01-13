<!-- resources/views/movies/index.blade.php -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>映画一覧</title>
</head>
<body>
    <h1>映画作品一覧</h1>

    <ul>
        @foreach($movies as $movie)
            <li style="margin-bottom: 20px;">
                <div><strong>タイトル:</strong> {{ $movie->title }}</div>
                
                <!-- Faker で生成された imageUrl() を表示 -->
                <div>
                    <img src="{{ $movie->image_url }}" alt="映画ポスター" style="width:200px;">
                </div>

                <!-- もし他のカラムも表示したいなら -->
                @if(isset($movie->published_year))
                    <div>公開年: {{ $movie->published_year }}</div>
                @endif
                @if(isset($movie->description))
                    <div>説明: {{ $movie->description }}</div>
                @endif
                @if(isset($movie->is_showing))
                    <div>上映中: {{ $movie->is_showing ? 'はい' : 'いいえ' }}</div>
                @endif
            </li>
        @endforeach
    </ul>
</body>
</html>

