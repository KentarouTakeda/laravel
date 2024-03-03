# Laravel カスタマイズ

## 追加パッケージ

### [Laravel Dump Server](https://github.com/beyondcode/laravel-dump-server)

* `./artisan dump-server` を実行すると `dump()` の結果が画面ではなくコンソールへ出力されます。

### [Laravel IDE Helper Generator](https://github.com/barryvdh/laravel-ide-helper)

* FacadeやEloquent動的プロパティのコード補完に対応しています。
* `composer dump-autoload` / `composer install` を実行する度に最新のコード補完情報が生成されます。
* `./artisan migrate` を実行する度にEloquentモデルの補完情報が自動的に生成されます。

### [Laravel Debugbar](https://github.com/barryvdh/laravel-debugbar)

* *APP_DEBUG* が *true* に設定されている場合、画面の下にデバッグバーが表示されます。

### [PHPStan](https://github.com/phpstan/phpstan)

* `vendor/bin/phpstan analyze` で静的解析が行われます。
  phpstan の Laravel 非対応による既知のエラーは予め除外してあります。

### [phpunit-watcher](https://github.com/spatie/phpunit-watcher)

* `vendor/bin/phpunit-watcher watch` でコード変更を監視し自動テストを実行できます。
  * `vendor/bin/phpunit-watcher watch tests/FILENAME` で特定テストのみの監視も行えます。
* Laravel のディレクトリ構成に応じて監視ディレクトリをカスタマイズ済です。

### [PHP CS Fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer)

* `vendor/bin/php-cs-fixer fix` でコード整形が行われます。
  * `vendor/bin/php-cs-fixer fix app/Http` 等で特定ディレクトリ配下のみの整形も行えます。

### [ParaTest](https://github.com/paratestphp/paratest)

* `./artisan test -p` で並列化テストを行えます。テストが高速化します。

### [phpunit/php-code-coverage](https://github.com/sebastianbergmann/php-code-coverage)

* `composer coverage` でカバレッジレポートを生成できます。
  * 結果は *public/docs/coverage/* へ出力されます。
* 実行には [PCOV](https://github.com/krakjoe/pcov) が必要です。

### [PhpMetrics](https://github.com/phpmetrics/PhpMetrics)

* `composer phpmetrics` でコードのメトリクス解析レポートを生成できます。
  * 結果は *public/docs/phpmetrics/* へ出力されます。

### [PHP Insights](https://github.com/nunomaduro/phpinsights)

* `./artisan insights` でコード品質レポートが表示されます。

### [husky](https://github.com/typicode/husky) / [run-if-changed](https://www.npmjs.com/package/run-if-changed) によるGitフック

commit / checkout / merge 等の操作が行われた場合git-hookにより自動的に次の動作が行われます。

* 最適化情報のクリア `./artisan optimize:clear`
* package-lock.json が変更された場合 `npm install`
* composer.lock が変更された場合 `composer install`

*何れのツールも開発用途のため **本番環境へのインストールは非推奨** です。*  
*`composer install --no-dev` / `npm install --prod` を利用してください。*

### [direnv](https://github.com/direnv/direnv) によるローカル（非Docker）環境での開発

* `cp .envrc.example .envrc` で設定される環境変数でローカル環境のphpのみで動作します。

## オリジナルからの変更点

* `public` ストレージの公開URIが `storage` から `public` へ変更されています。

---

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
