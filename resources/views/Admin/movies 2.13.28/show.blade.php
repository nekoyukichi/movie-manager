<!-- resources/views/admin/movies/show.blade.php -->

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>映画管理画面 - 詳細</title>
    <style>
        table, th, td {
            border: 1px solid #666;
            border-collapse: collapse;
            padding: 8px;
        }
    </style>
</head>
<body>
    <h1>映画詳細 (管理画面)</h1>

    <table>
        <tr>
            <th>ID</th>
            <td>{{ $movie->id }}</td>
        </tr>
        <tr>
            <th>映画タイトル</th>
            <td>{{ $movie->title }}</td>
        </tr>
        <tr>
            <th>画像URL</th>
            <td>{{ $movie->image_url }}</td>
        </tr>
        <tr>
            <th>公開年</th>
            <td>{{ $movie->published_year }}</td>
        </tr>
        <tr>
            <th>上映状態</th>
            <td>
                {{ $movie->is_showing ? 'true' : 'false' }}
            </td>
        </tr>
        <tr>
            <th>概要</th>
            <td>{{ $movie->description }}</td>
        </tr>
        <tr>
            <th>登録日時</th>
            <td>{{ $movie->created_at }}</td>
        </tr>
        <tr>
            <th>更新日時</th>
            <td>{{ $movie->updated_at }}</td>
        </tr>
    </table>

    <!-- 一覧に戻るリンク -->
    <p><a href="{{ route('admin.movies.index') }}">一覧へ戻る</a></p>

</body>
</html>
