# Laravel API Project

このプロジェクトは、Laravel を使用した API 通信のテスト用に作成されました。主に、製品情報の CRUD 操作とユーザー認証を行う API エンドポイントが含まれています。

## 機能

-   ユーザー認証（ログイン）
-   製品情報の表示、作成

## セットアップ

プロジェクトをローカルで実行するには、以下の手順に従ってください。

1. リポジトリをクローンします。

2. 依存関係をインストールします。

   `composer install`

3. `.env` ファイルを作成し、データベース設定を行います。

4. データベースマイグレーションを実行します。

   `php artisan migrate`

5. ユーザーデータのシーディングを実行します。

   `php artisan db:seed --class=UsersTableSeeder`

6. サーバーを起動します。

   `php artisan serve`

## API エンドポイント

### ユーザー認証

-   **ログイン**: `POST /api/login`
    -   リクエストボディに`email`と`password`を含めます。
    -   成功時、ユーザー情報とトークンが返されます。

### 製品情報

-   **一覧表示**: `GET /api/products`
    -   登録されている全製品情報を取得します。
-   **製品作成**: `POST /api/products`
    -   新しい製品情報を作成します。認証が必要です。

## 注意事項

このプロジェクトはテスト用であり、実際の本番環境での使用は推奨されません。

## ライセンス

このプロジェクトは[MIT ライセンス](LICENSE)の下で公開されています。
