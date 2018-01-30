<?php
$app = new \Universe\App(dirname(__DIR__));

error_reporting(E_ALL);
ini_set('display_errors', 1);

/**
 * 注册全局服务
 */
$app->initializeServices([
    \Universe\Providers\ConfigServerProvider::class,
    \Universe\Providers\LoggerServiceProvider::class,
    \Universe\Providers\HttpServiceProvider::class,
    \Universe\Providers\ExceptionServerProvider::class,
    \Universe\Providers\DispatcherServiceProvider::class,

    \Universe\Providers\ExportServerProvider::class,
]);

/**
 * 启动异常捕捉
 */
$app::getDi()->get('exception')->register();

return $app;