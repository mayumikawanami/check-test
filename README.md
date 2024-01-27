# アプリケーション名
お問い合わせフォーム

## 環境構築
１.git clone　リンク
２.docker-compose up -d --build
３.docker-compose exec php bash
４.composer install
5..env.exampleファイルから.envを作成し、環境変数を変更
6.php artisan key:generate
7.php artisan migrate
8.php artisan db:seed

## 使用技術(実行環境)
・PHP 7.4.9
・Lalavel 8.83.8
・MySQL 8.0.26

## ER図
![Text]https://raw.githubusercontent.com/mayumikawanami/check-test/b3e0fa453f8661336507f809bafcee09a9f95df6/check-test.png
## URL
・開発環境：http://localhost/
・phpMyAdmin:http//localhost:8080
