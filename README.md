# 映画管理リスト (Movie Manager)

## 概要
映画情報を管理するための超超シンプルなWebアプリケーションです。映画タイトル、公開年、上映中かどうか、概要などの情報を登録・表示します。
また、映画館のスタッフ向けの管理画面を提供し、映画の一覧確認や詳細確認が可能です。

## 技術スタック
- PHP (Laravel)
- MySQL
- Docker
- HTML/CSS

## 環境構築手順
1. リポジトリをクローンします。
    ```bash
    git clone https://github.com/nekoyukichi/movie-manager.git
    cd movie-manager
    ```

2. Docker コンテナを起動します。
    ```bash
    docker compose up -d
    ```

3. マイグレーションを実行してDBをセットアップします。
    ```bash
    docker compose exec php-container php artisan migrate
    ```

4. サンプルデータを投入します。
    ```bash
    docker compose exec php-container php artisan db:seed
    ```

5. アプリケーションをブラウザで開きます。
    ```
    http://localhost:8888/admin/movies
    ```

## 今後の改善点
作っていて楽しかったので、ここで完成にはせずに映画検索や絞り込み機能の追加とAPIを使った外部サービス連携を取り入れたい
