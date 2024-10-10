# mogitate(フリマアプリ)

##環境構築
**Dockerビルド**
1. 'git@github.com:nanami-dimm/mogitate.git'
2. DockerDesktopを立ち上げる。
3. コンテナの作成　'docker-compose up -d --build'

**laravel環境構築**
1. phpコンテナへアクセス
   'docker-compose exec php bash'
2. 'composer install'
3. .envに以下の環境変数を追加
  ``` text
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel_db
DB_USERNAME=laravel_user
DB_PASSWORD=laravel_pass
```
4. アプリケーションキーの作成
   phpコンテナ内にて
   'php artisan key:generate'

5. マイグレーションの実行
   PHPコンテナ内にて
   'php artisan migrate'

6. シーティングの実行
   PHPコンテナ内にて
   'php artisan db:seed'

##使用技術(実行環境)
-PHP7.4.9
-laravel8.83.27
-mysql8.0.26

##URL
-開発環境: http://localhost/products/
-phpMyadmin: http://localhost:8080/
