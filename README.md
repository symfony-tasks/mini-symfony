# Mini symfony. Создаем проект на symfony с минимальным набором зависимостей

## Цели

0. Базовое использование GitHub, Git
1. Научиться устаналивать зависимости через Composer
2. Понять минимальные зависимости для запуска веб-проекта на симфони
3. Понять минимальные зависимости для запуска консольных команд в симфони
4. Освоение PHP 7

## Задачи

0. Зарегистрироваться на GH, прислать свой логин для прикрепления к проекту
1. Настроить себе минимальное локальное окружение для разработки на PHP 7 (PHP 7.\*, composer, git)
2. Форкнуть и склонировать проект
3. Выполнить задания
4. Отправить пулл-реквест в master проекта (можно выполнить на любом этапе, указав в пулл-реквесте, какие из заданий на данный момент выполнены)
5. Участвовать в обсуждении своего и чужих пулл-реквестов в этом проекте

## Задания

### Заполните описание проекта в `composer.json`

### 404 на пальцах

Необходимо запустить локальный сервер на PHP, который будет способен отобразить стандартную ошибку 404 symfony

Нельзя использовать (в целях обучения):
 - `FrameworkBundle` 
 - `MicroKernelTrait` 
 - Пакет `symfony/symfony` и аналоги
 - Пакет `symfony/symfony-standard` и аналоги
 - Команду `composer install-project`

Проект должен состоять из (желательно) трех файлов - ядра, фронт-контроллера (`index.php`|`app.php`|etc) и `composer.json`
Ядро должно работать в `dev` режиме

Сервер запускается командой 
```sh
php -S 0.0.0.0:8000 path/to/router.php
```

При открытии http://localhost:8000/ должна быть отображена корректная страница с сообщением о несконфигурированном роуте

### 404 на коленке

Необходимо запустить локальный сервер на PHP, который будет способен отобразить стандартную ошибку 404 symfony

Можно использовать `FrameworkBundle` а также `MicroKernelTrait`

Нельзя использовать (в целях обучения):
 - Пакет `symfony/symfony` и аналоги
 - Пакет `symfony/symfony-standard` и аналоги
 - Команду `composer install-project`

Проект должен состоять из (желательно) трех файлов - ядра, фронт-контроллера (`index.php`|`app.php`|etc) и `composer.json`
Ядро должно работать в `dev` режиме

Сервер запускается командой 
```sh
php -S 0.0.0.0:8000 path/to/router.php
```

При открытии http://localhost:8000/ должна быть отображена корректная страница с сообщением о несконфигурированном роуте

### И с развороту

Все, что в задании `404 на коленке`, с двумя изменениями

 1. Файлов 4 - добавляется файл консоли 
 2. Запуск веб-сервера должен произойти с помощи команды `php path_console/to/console.php 0.0.0.0:8000 --webroot=path/to/ --router=path/to/router.php`

## Материалы

* [Требования для запуска Symfony](http://symfony.com/doc/current/reference/requirements.html)
* [Список пакетов symfony](https://packagist.org/packages/symfony/)
* [Настройка ядра](http://symfony.com/doc/current/reference/configuration/kernel.html)
* [FrameworkBundle](https://github.com/symfony/framework-bundle)

## Статьи из серии "Создание фреймворка на компонентах Symfony"

Будут полезны для решения заданий

* [Event Dispatcher](https://symfony.com/doc/current/create_framework/event_dispatcher.html#main)
* [Http Kernel Interface](https://symfony.com/doc/current/create_framework/http_kernel_httpkernelinterface.html#main)
* [Http Kernel](https://symfony.com/doc/current/create_framework/http_kernel_httpkernel_class.html#main)
* [Controller resolver](https://symfony.com/doc/current/create_framework/http_kernel_controller_resolver.html#main)
