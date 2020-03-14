# PAY.JP PHP bindings

[![Build Status](https://travis-ci.org/wozozo/pppayjp-php.svg?branch=master)](https://travis-ci.org/wozozo/pppayjp-php)

## Requirements

PHP 7.1 and later.

## Composer

[Composer](http://getcomposer.org/) でインストールします。

```json
{
  "require": {
    "wozozo/pppayjp-php": "1.*"
  }
}
```

上記の内容を `composer.json` に書き、以下のコマンドでインストールしてください。

```shell script
composer install
```

ライブラリを読み込むには Composer の [autoload](https://getcomposer.org/doc/00-intro.md#autoloading) を使用します。

```php
require __DIR__ . '/vendor/autoload.php';
```

## 使用例

```php
use Payjp\Client;

$payjp = new Client('sk_test_c62fade9d045b54cd76d7036');
// X-Payjp-Direct-Token-Generate 使用する場合
$payjp->setDirectTokenMode(true);

$token = $payjp->tokens->create([
    'card' => [
        'number' => 4242424242424242,
        'exp_month' => 12,
        'exp_year' => 2020
    ]
]);
echo $token . PHP_EOL;
```

## APIドキュメント

* APIドキュメントについては以下の公式ドキュメントをご覧ください
  * [PAY.JP API 利用ガイド](https://pay.jp/docs/started)
  * [PAY.JP API リファレンス](https://pay.jp/docs/api/)

## テスト

テストを実行するには、[Composer](http://getcomposer.org/) で [PHPUnit](http://packagist.org/packages/phpunit/phpunit) をインストールしてください。

```shell script
composer update
```

テストの実行方法

```shell script
./vendor/bin/phpunit
```
