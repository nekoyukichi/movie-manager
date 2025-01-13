<!-- resources/views/admin/movies/index.blade.php -->

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>映画管理画面 - 一覧</title>
    <style>
        table, th, td {
            border: 1px solid #666;
            border-collapse: collapse;
            padding: 8px;
        }
    </style>
</head>
<body>
    <h1>映画一覧 (管理画面)</h1>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>映画タイトル</th>
                <th>画像URL</th>
                <th>公開年</th>
                <th>上映状態</th>
                <th>概要</th>
                <th>登録日時</th>
                <th>更新日時</th>
                <th>詳細</th>
            </tr>
        </thead>
        <tbody>
            @foreach($movies as $movie)
            <tr>
                <!-- idカラム -->
                <td>{{ $movie->id }}</td>
                
                <!-- 映画タイトル -->
                <td>{{ $movie->title }}</td>
                
                <!-- 画像URL (今回はURLをそのまま表示) -->
                <td>{{ $movie->image_url }}</td>
                
                <!-- 公開年 -->
                <td>{{ $movie->published_year }}</td>

                <!-- 上映状態 -->
                <!-- is_showing が true なら上映中、false なら上映予定 と表示 -->
                <td>
                    {{ $movie->is_showing ? 'true' : 'false' }}
                </td>

                <!-- 概要 -->
                <td>{{ $movie->description }}</td>

                <!-- created_at, updated_at -->
                <td>{{ $movie->created_at }}</td>
                <td>{{ $movie->updated_at }}</td>

                <!-- 詳細ページへのリンク -->
                <td>
                    <!-- /admin/movies/ID へ飛ぶリンク -->
                    <a href="{{ route('admin.movies.show', $movie->id) }}">詳細</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
