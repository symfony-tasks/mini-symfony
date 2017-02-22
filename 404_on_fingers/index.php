<?php
require __DIR__ . '/vendor/autoload.php';

http_response_code(404); //мы то знаем что в первом задании 404
$kernel = new Kernel();
/**
 * HttpKernel тут кидает HttpException(наследника встроенного RuntimeException), который ловится в twig-bundle, который зарегистрировал свой exception_handler
 * http://symfony.com/doc/current/reference/configuration/twig.html#config-twig-exception-controller
 *
 */

$parse = function($code, $msg, $trace) use ($kernel) {
    if ($kernel->getMode() === Kernel::MODE_DEV) {
        // https://github.com/symfony/twig-bundle/blob/master/Resources/views/Exception/exception.html.twig
        return sprintf("%d: %s\n\n%s", $code, $msg, implode("\n", $trace));
    }

    // https://github.com/symfony/twig-bundle/blob/master/Resources/views/Exception/error.html.twig
    return '';
};

$outException = function(\Exception $e) use ($parse) {
    ob_start();
    echo $parse($e->getCode(), $e->getMessage(), $e->getTrace());
    return ob_get_clean();
};

set_exception_handler(function (\Exception $e) use ($outException) {
    echo $outException($e);
});

throw new RuntimeException('inconfigured route');
